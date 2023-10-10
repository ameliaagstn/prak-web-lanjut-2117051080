<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use App\Models\UserModel;

class UserController extends BaseController
{
    
    protected $helpers=['form'];
    public $userModel;
    public $kelasModel;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }
    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }

    public function profile($nama="", $kelas="", $npm=""){

        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
            'title' => 'Profile'

        ];

        return view('profile', $data);

    }

    public function create(){
        // $kelas = [
        //     [
        //         'id' => 1,
        //         'nama_kelas' => 'A'
        //     ],
        //     [
        //         'id' => 2,
        //         'nama_kelas' => 'B'
        //     ],
        //     [
        //         'id' => 3,
        //         'nama_kelas' => 'C'
        //     ],
        //     [
        //         'id' => 4,
        //         'nama_kelas' => 'D'
        //     ]        
        // ];

        // $kelasModel = new KelasModel();
        $kelas = $this->kelasModel->getKelas();

        $data =[
            'title' => 'Create User',
            'kelas' => $kelas
        ];

        return view('create_user', $data);
    }

    public function store(){
        // get nama kelas based on selected id kelas
        // $kelasModel = new KelasModel();
        if($this->request->getVar('kelas') != ''){
            $kelas_select = $this->kelasModel->where('id', $this->request->getVar('kelas'))->first();
            $nama_kelas = $kelas_select['nama_kelas'];
        }else{
            $nama_kelas = '';
        }

        // validation
        if(!$this->validate([
            'nama' => 'required|alpha_space',
            'npm' => 'required|is_unique[user.npm]|integer|min_length[5]',
            'kelas' => 'required'
        ])){

            session()->setFlashdata('nama_kelas');
            return redirect()->back()->withInput()->with('nama_kelas', $nama_kelas);
        }

        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');
        $name = $foto->getRandomName();
        if ($foto->move($path, $name)) {
            $foto = base_url ($path . $name);
        }

        // save data
        $this->userModel->saveUser([
            'nama'      => $this->request->getVar('nama'),
            'npm'       => $this->request->getVar('npm'),
            'id_kelas'  => $this->request->getVar('kelas'),
            'foto'      => $foto
        ]);

        // show to profile page...
        $data = [
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'kelas' => $nama_kelas,
            'title' => 'Profile'
        ];
        // return view('profile', $showed_data);
        return redirect()->to('/user');
    }

    public function show($id){
        $user = $this->userModel->getUser($id);
        // dd($user);
        $data = [
            'title' => 'Profile',
            'user'  => $user
        ];
        return view('profile', $data);
    }
}