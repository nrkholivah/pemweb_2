<?php

namespace App\Controllers;

class Profil extends BaseController
{
    public function home(): string
    {
        helper('url');
        return view('profil/home');
    }
    public function pemweb()
    {
        return view('profil/pemweb');
    }
    public function rpl()
    {
        return view('profil/rpl');
    }
    public function sim()
    {
        return view('profil/sim');
    }
    public function metopen()
    {
        return view('profil/metopen');
    }
}
