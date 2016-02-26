<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
define('ORGANIZATION', 'Innovation');

class Controller extends BaseController
{
    public function index()
    {
        $req->middleware('auth', ['except' => ['index']]);
        return view('top.index', ['results' => $results]);
    }
    public function authenticate()
    {

    }
}
