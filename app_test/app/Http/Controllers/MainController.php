<?php
/**
 * Created by PhpStorm.
 * User: NTC
 * Date: 23.07.2019
 * Time: 16:45
 */

namespace App\Http\Controllers;

use App\Models\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use phpDocumentor\Reflection\Types\String_;

class MainController extends Controller
{
    public function root()
    {
        return view('main');
    }


    public function login()
    {
        $app_id = env('VK_APP_ID');
        $secret_key = env('VK_APP_SECRET_KEY');
        $service_key = env('VK_APP_SERVICE_KEY');
        $redirect_uri = "http://laravel.local/vk_login";
        $group_id = env("VK_GROUP_ID");
        $scopes = "offline,groups,email";
        return redirect("https://oauth.vk.com/authorize?client_id={$app_id}&display=page&redirect_uri={$redirect_uri}&scope={$scopes}&response_type=code&v=5.101");
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


    public function vk_login_return(Request $request)
    {
        $code = $request["code"];
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
                return redirect('/');
            }
        }
        return redirect('/');
    }


    public function find_party()
    {
        //return MainController::login();
        if (Auth::check())
            return view('main');
        else
            return $this->login();
    }

    public function create_party()
    {
        if (Auth::check())
            return view('main');
        else
            return view('auth/login');
    }
}
