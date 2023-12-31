<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\Rute;

class Auth extends BaseController
{
    protected $user, $rute, $db;
    public function __construct()
    {
        $this->db = db_connect();
        $this->user = new User();
        $this->rute = new Rute();
    }

    public function index()
    {

        return view('Auth/v_login');
    }

    public function process()
    {
        $dataPost = $this->request->getPost();
        $user = $this->user->where('uname', $dataPost['uname'])->first();

        if ($user) {
            if ($user['password'] != md5($dataPost['pass'])) {
                return redirect()->back()->with('error', 'Password salah!');
            }
            $data_login = [
                'id_user' => $user['id'],
                'nama' => $user['n_user'],
                'uname' => $user['uname']
            ];
            session()->set($data_login);
            return redirect()->to('/admin');
        } else {
            return redirect()->back()->with('error', 'uname tidak terdaftar!');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
