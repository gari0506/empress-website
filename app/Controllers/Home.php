<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function indexv2(): string
    {
        return view('indexv2');
    }
    public function menu(): string
    {
        return view('menu');
    }

    public function landingpage()
    {
        return view('landingpage');
    } 
    public function landingpagev2()
    {
        return view('landingpagev2');
    }
}
