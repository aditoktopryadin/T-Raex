<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\Rute;
use App\Models\Stasiun;
use App\Models\Urutan;

class Admin extends BaseController
{
    protected $user, $rute, $stasiun, $db, $urutan;
    public function __construct()
    {
        $this->db = db_connect();
        $this->user = new User();
        $this->rute = new Rute();
        $this->stasiun = new Stasiun();
        $this->urutan = new Urutan();
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
        $builder = $this->db->table('tb_urutan');
        $builder->select('*');
        $builder->join('tb_stasiun', 'tb_stasiun.id = tb_urutan.id_stasiun');
        $builder->join('tb_rute', 'tb_rute.id = tb_urutan.id_rute');
        $query = $builder->get()->getResultArray();
        // var_dump($query);
        // // $data_urutan = $this->urutan->findAll();
        $data = [
            'urutan' => $query,
            'menu' => 'Kereta',
            'submenu' => 'Urutan'
        ];
        return view('view_admin/v_urutan', $data);
    }

    public function save_urutan()
    {
        $getUrutan = $this->request->getPost();
        $this->urutan->save([
            'urutan' => $getUrutan['urutan'],
        ]);

        session()->setFlashdata('norm_pesan', 'Menambahkan Data Urutan');

        return redirect()->to('admin/urutan');
    }

    public function edit_urutan($id)
    {
        $getUrutan = $this->request->getPost();
        $this->urutan->save([
            'id' => $id,
            'urutan' => $getUrutan['urutan']
        ]);

        session()->setFlashdata('norm_pesan', 'Edit Data Urutan');

        return redirect()->to('admin/urutan');
    }

    public function delete_urutan($id)
    {
        $this->urutan->delete($id);

        session()->setFlashdata('norm_pesan', 'Hapus Data Urutan');

        return redirect()->to('/admin/urutan');
    }
}
