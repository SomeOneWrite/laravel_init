<?php
/**
 * Created by PhpStorm.
 * User: NTC
 * Date: 23.07.2019
 * Time: 16:45
 */

namespace App\Http\Controllers;

use App\Models\Auth\User;
use App\Models\Party;
use App\Models\Photo;
use DebugBar\DebugBar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use phpDocumentor\Reflection\Types\String_;

class MainController extends Controller
{
    public function root()
    {
        return view('main');
    }


    public function login($server_redirect_uri)
    {
        $app_id = env('VK_APP_ID');
        $secret_key = env('VK_APP_SECRET_KEY');
        $service_key = env('VK_APP_SERVICE_KEY');
        $redirect_uri = "http://laravel.local/vk_login";
        $group_id = env("VK_GROUP_ID");
        $scopes = "offline,groups,email";
        return redirect("https://oauth.vk.com/authorize?client_id={$app_id}&display=page&redirect_uri={$redirect_uri}&scope={$scopes}&response_type=code&state={$server_redirect_uri}v=5.101");
    }


    public function getUserCredentials($access_token)
    {
        ['access_token' => $access_token];
        $client = new Client();
        $fields = "sex,bdate,city,has_photo,status,last_seen";
        $response = $client->get("https://api.vk.com/method/users.get?fields={$fields}&access_token={$access_token}&v=5.101");
        $data = json_decode($response->getBody(), true);
        return [
            "data" => $data["response"][0],
            "credentials" => [
                "vk_id" => $data["response"][0]["id"]
            ]
        ];
    }


    public function getPartyData($id = null)
    {
        $data = array();
        if (!is_null($id)) {
            $partys = Party::all()->take(10)->where('owner_id','=', $id);
        } else {
            $partys = Party::all()->take(10);
        }
        foreach ($partys as $party) {
            $photos = Photo::where('party_id', $party->id)->get();
            $data[] = [
                "party" => $party,
                "photos" => $photos
            ];
        }
        return $data;
    }


    public function vk_login_return(Request $request)
    {
        $code = $request["code"];
        $server_redirect_uri = $request["server_redirect_uri"];
        $app_id = env('VK_APP_ID');
        $secret_key = env('VK_APP_SECRET_KEY');
        $redirect_uri = "http://laravel.local/vk_login";

        $client = new Client();
        $response = $client->get("https://oauth.vk.com/access_token?client_id={$app_id}&client_secret={$secret_key}&redirect_uri=$redirect_uri&code={$code}");
        $access_token = json_decode($response->getBody(), true)['access_token'];

        $credentials = $this->getUserCredentials($access_token);
        $user = User::where('vk_id', $credentials["data"]["id"])->first();
        if ($user) {
            Auth::loginUsingId($user->id);
            return redirect('/');
        } else {
            $user = new User();
            $user->vk_id = $credentials["data"]["id"];
            $user->name = $credentials["data"]["first_name"];
            $user->access_token = $access_token;
            $user->save();
            if (Auth::loginUsingId($user->id)) {
                return redirect('/' . $server_redirect_uri);
            }
        }
        return view('find_party')->with("partys", $this->getPartyData());
    }

    public function my_party(Request $request)
    {
        if (Auth::check()) {
            return view('show_party')->with("partys", $this->getPartyData(Auth::user()->vk_id));
        }

        return redirect('/');
    }

    public function delete_party()
    {
        if (Auth::check()) {
            Party::where('owner_id', '=', Auth::user()->vk_id)->delete();
        }

        return redirect('/');
    }

    public function save_party(Request $request)
    {
        $allowedfileExtension = ['jpg', 'png'];
        $files = $request->file('files');
        if (!is_null($files)) {
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);
            }
            if (!$check) {
                return "file type exception";
            }
        }

        Db::beginTransaction();
        try {
            $party = new Party();
            $party->owner_id = Auth::user()->vk_id;
            $party->title = $request["title"];
            $party->description = $request["description"];
            $party->people_needed = 3;
            $party->save();
            if (!is_null($files)) {
                foreach ($files as $file) {
                    $extension = $file->getClientOriginalExtension();
                    $photo = new Photo();
                    $photo->party_id = $party->id;
                    $photo->data = $contents = "data:image/" . $extension . ";base64," . base64_encode($file->openFile()->fread($file->getSize()));
                    $photo->save();
                }
            }
            Db::commit();
        } catch (\Exception $e) {
            Db::rollBack();
            return "false";
        }

        return "true";
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }



    public
    function find_party()
    {
        if (Auth::check()) {
            return view('find_party')->with("partys", $this->getPartyData());
        } else
            return $this->login("find_party");
    }

    public
    function create_party()
    {
        if (Auth::check())
            return view('create_party');
        else
            return $this->login("create_party");
    }
}
