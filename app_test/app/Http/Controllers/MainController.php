<?php
/**
 * Created by PhpStorm.
 * User: NTC
 * Date: 23.07.2019
 * Time: 16:45
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

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
        $redirect_uri = "laravel.local/vk_login";
            //url("/posts/{$post->id}")
        return redirect("https://oauth.vk.com/authorize?client_id={$app_id}&display=page&redirect_uri={$redirect_uri}&scope=friends&response_type=code&v=5.101");
        #return view('login');
    }

    public function find_party()
    {
        return MainController::login();
        if (Auth::check())
            return view('main');
        else
            return view('auth/login');
    }

    public function create_party()
    {
        if (Auth::check())
            return view('main');
        else
            return view('auth/login');
    }
}
