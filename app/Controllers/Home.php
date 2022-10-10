<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title']='Home';
        return view('home',$data);
    }
    public function jadwal()
    {
        $data['title']='Jadwal Wisuda';
        return view('jadwal_wisuda',$data);
    }
    public function peserta()
    {
        $data['title']='Peserta Wisuda';
        return view('peserta_wisuda',$data);
    }
}
