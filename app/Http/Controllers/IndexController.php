<?php
namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function landingpage()
    {
        return view('landingpage');
    }
    public function artikel()
    {
        return view('artikel');
    }
    public function detailartikel()
    {
        return view('detailartikel');
    }
    public function harga()
    {
        return view('harga');
    }
    public function faq()
    {
        return view('faq');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
}
