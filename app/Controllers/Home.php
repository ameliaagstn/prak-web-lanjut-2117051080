<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    // public function profile(){
    //     $data = [
    //         //untuk meng assign value pake =>
    //         //Key       Value
    //         'nama' => 'Amelia Agustina Nainggolan',
    //         'kelas' => 'B',
    //         'npm' => '2117051080'
    //     ];
    //     return view('profile', $data);
    // }

    public function profile($poto ="", $nama = "", $kelas = "", $npm = "")
    {
        $data = [
            //untuk meng assign value pake =>
            //Key       Value
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];
        return view('profile', $data);
    }
}
