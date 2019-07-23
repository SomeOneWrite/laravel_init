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

class MainController extends Controller
{
    public function root()
    {
        return view('main');
    }

    public function login()
    {
        return view('main');
    }

    public function find_party()
    {
        return view('main');
    }

    public function create_party()
    {
        return view('main');
    }
}
