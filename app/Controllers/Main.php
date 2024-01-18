<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\Rute;
use App\Models\Stasiun;
use App\Models\Urutan;

class Main extends BaseController
{
    protected $user, $rute, $db, $stasiun;
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
        $data_stasiun = $this->stasiun->orderBy('n_stasiun', 'ASC')->findAll();
        $data = [
            'stasiun' => $data_stasiun,
            'menu' => 'Kereta',
            'submenu' => 'Stasiun'
        ];
        return view('view_user/v_main',$data);
    }

    public function cari()
    {
        $idAwal = $this->request->getPost('lok_awal');
        $idAkhir = $this->request->getPost('lok_akhir');
        echo $idAwal;
        echo '<br/>';
        echo $idAkhir;
        echo '<br/>';

        $routes = $this->urutan->getRouteAndOrder($idAwal, $idAkhir);

        $fastestRoute = $this->branchAndBound($routes, $idAwal, $idAkhir);


        print_r($fastestRoute);
    }

    private function branchAndBound($routes, $startStation, $endStation)
    {
        // Implementasikan algoritma Branch and Bound di sini untuk mencari rute tercepat.
        // Sesuaikan dengan struktur data dan logika bisnis sebenarnya.

        // Contoh sederhana: Mengambil rute tercepat berdasarkan urutan.
        $fastestRoute = [];
        foreach ($routes as $route) {
            $fastestRoute[$route['id_rute']][] = $route['id_stasiun'];

            // Hentikan pencarian jika mencapai stasiun tujuan.
            if ($route['id_stasiun'] == $endStation) {
                break;
            }
        }

        return $fastestRoute;
    }
}
