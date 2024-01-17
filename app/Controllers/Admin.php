<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\Rute;
use App\Models\Stasiun;

class Admin extends BaseController
{
    protected $user, $rute, $stasiun, $db;
    public function __construct()
    {
        $this->db = db_connect();
        $this->user = new User();
        $this->rute = new Rute();
        $this->stasiun = new Stasiun();
    }

    public function index()
    {
        $data = [
            'menu' => 'Dashboard',
            'submenu' => 'none'

        ];
        return view('view_admin/v_dash', $data);
    }

    public function user()
    {
        $data_user = $this->user->findAll();
        $data = [
            'users' => $data_user,
            'menu' => 'User',
            'submenu' => 'none'
        ];
        return view('view_admin/v_user', $data);
    }

    public function save_user()
    {
        $getUser = $this->request->getPost();
        $this->user->save([
            'n_user' => $getUser['n_user'],
            'uname' => $getUser['uname'],
            'password' => md5($getUser['password']),
        ]);

        session()->setFlashdata('norm_pesan', 'Menambahkan Data User');

        return redirect()->to('admin/user');
    }

    public function edit_user($id)
    {
        $getUser = $this->request->getPost();
        if ($getUser['password'] == '') {
            $this->user->save([
                'id' => $id,
                'n_user' => $getUser['n_user'],
                'uname' => $getUser['uname'],
            ]);
        } else {
            $this->user->save([
                'id' => $id,
                'n_user' => $getUser['n_user'],
                'uname' => $getUser['uname'],
                'password' => md5($getUser['password'])
            ]);
        }

        session()->setFlashdata('norm_pesan', 'Edit Data User');

        return redirect()->to('admin/user');
    }

    public function delete_user($id)
    {
        $this->user->delete($id);

        session()->setFlashdata('norm_pesan', 'Hapus Data User');

        return redirect()->to('/admin/user');
    }

    public function stasiun()
    {
        $data_stasiun = $this->stasiun->findAll();
        $data = [
            'stasiun' => $data_stasiun,
            'menu' => 'Kereta',
            'submenu' => 'Stasiun'
        ];
        return view('view_admin/v_stasiun', $data);
    }

    public function save_stasiun()
    {
        $getStasiun = $this->request->getPost();
        $this->stasiun->save([
            'n_stasiun' => $getStasiun['n_stasiun'],
        ]);

        session()->setFlashdata('norm_pesan', 'Menambahkan Data Stasiun');

        return redirect()->to('admin/stasiun');
    }

    public function edit_stasiun($id)
    {
        $getStasiun = $this->request->getPost();
        $this->stasiun->save([
            'id' => $id,
            'n_stasiun' => $getStasiun['n_stasiun']
        ]);

        session()->setFlashdata('norm_pesan', 'Edit Data Stasiun');

        return redirect()->to('admin/stasiun');
    }

    public function delete_stasiun($id)
    {
        $this->stasiun->delete($id);

        session()->setFlashdata('norm_pesan', 'Hapus Data Stasiun');

        return redirect()->to('/admin/stasiun');
    }

    public function rute()
    {
        $data_rute = $this->rute->findAll();
        $data = [
            'rute' => $data_rute,
            'menu' => 'Kereta',
            'submenu' => 'Rute'
        ];
        return view('view_admin/v_rute', $data);
    }

    public function save_rute()
    {
        $getRute = $this->request->getPost();
        $this->rute->save([
            'n_rute' => $getRute['n_rute'],
        ]);

        session()->setFlashdata('norm_pesan', 'Menambahkan Data Rute');

        return redirect()->to('admin/rute');
    }

    public function edit_rute($id)
    {
        $getRute = $this->request->getPost();
        $this->rute->save([
            'id' => $id,
            'n_rute' => $getRute['n_rute']
        ]);

        session()->setFlashdata('norm_pesan', 'Edit Data Rute');

        return redirect()->to('admin/rute');
    }

    public function delete_rute($id)
    {
        $this->rute->delete($id);

        session()->setFlashdata('norm_pesan', 'Hapus Data Rute');

        return redirect()->to('/admin/rute');
    }


    public function jadwal()
    {
        $data = [
            'menu' => 'Kereta',
            'submenu' => 'Jadwal'
        ];
        return view('view_admin/v_jadwal', $data);
    }

    public function urutan()
    {
        $data = [
            'menu' => 'Kereta',
            'submenu' => 'Urutan'
        ];
        return view('view_admin/v_urutan', $data);
    }
}
