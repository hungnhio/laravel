<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 3/20/2016
 * Time: 11:04 AM
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class welcomeController extends BaseController
{
    public function index()
    {
        return view('welcome');
    }

    public function contact()
    {
       //echo "?ây là trang contact";
        return view('pages.contact');
    }

    public function about()
    {
        //echo "?ây là trang about";
        return view('pages.about');
    }
}