<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('user/v_home');
    }
}
