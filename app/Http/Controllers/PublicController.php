<?php


namespace App\Http\Controllers;
class PublicController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
}
