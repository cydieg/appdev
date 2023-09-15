<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function test()
    {
        return view('main');
    }

    public function index(): string
    {
        return view('welcome_message');
    }
}