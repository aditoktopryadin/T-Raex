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
        $data_stasiun = $this->db->table('tb_stasiun')
            ->select('id,n_stasiun')
            ->orderBy('n_stasiun', 'ASC')
            ->get()
            ->getResult();

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

        $data_urutan = $this->db->table('tb_urutan')
            ->select('id_rute, waktu, urutan')
            ->where('id_stasiun', $idAwal)
            ->get()
            ->getResultArray();

        foreach($data_urutan as $row){
            echo "Id Rute ".$row['id_rute'];
            echo '<br/>';
            echo "Id Waktu ".$row['waktu'];
            echo '<br/>';
            echo "Id Urutan ".$row['urutan'];
            echo '<br/>';

            
        }
        // echo $urutanSt1 . " Urutan St 1";
        // echo '<br/>';
        // echo $idSt2 . " Id St 2";
        // echo '<br/>';
        // echo $urutanSt2 . " Urutan St 2";
        // echo '<br/>';
        // if ($urutanSt1 == "1")
        //     $toLoop = $urutanSt2;
        // else
        //     $toLoop = $urutanSt2-$urutanSt1;

        // echo $toLoop;
        
        // echo '<br/>';
        // echo '<br/>';
        
        // $waktuSt1 = $this->db->table('tb_urutan')
        //     ->select('waktu,n_stasiun')
        //     ->join('tb_stasiun','tb_stasiun.id = tb_urutan.id_stasiun')
        //     ->where('id_stasiun', $idSt1)
        //     ->where('urutan', $urutanSt1)
        //     ->get()
        //     ->getRow();

        // $idRuteSt1 = $this->db->table('tb_urutan')
        //     ->select('id_rute')
        //     ->where('id_stasiun', $idSt1)
        //     ->where('urutan', $urutanSt1)
        //     ->get()
        //     ->getRow();
        
        // if ($idRuteSt1) {
        //     // Lakukan sesuatu dengan $idRuteSt1->id_rute
        //     echo "ID Rute St1: " . $idRuteSt1->id_rute;
        // } else {
        //     echo "Data tidak ditemukan untuk idSt1 = $idSt1 dan urutanSt1 = $urutanSt1";
        // }

        // echo '<br/>';
        // // Lakukan looping
        // if ($urutanSt1 == "1")
        //     $p = $urutanSt1;
        // else {
        //     $p = $urutanSt1;
        // }
        
        // $totalWaktu = 0; // Variabel untuk menyimpan total waktu
        // $nomor = 0;
        // while ($nomor <= $toLoop) {
        //     // Lakukan sesuatu dengan $p dan $waktuSt1->waktu
        //     echo "Iterasi ke-" . $nomor+1 . ", Waktu: " . $waktuSt1->waktu. ", Stasiun: " . $waktuSt1->n_stasiun;
        //     echo '<br/>';

        //     // Tambahkan waktu ke totalWaktu
        //     $totalWaktu += $waktuSt1->waktu;

        //     // Lakukan proses lainnya di dalam looping

        //     // Tingkatkan nilai $urutanSt1
        //     $urutanSt1++;

        //     // Cari data berdasarkan id_rute dan urutan yang baru
        //     $nextWaktu = $this->db->table('tb_urutan')
        //         ->select('waktu,n_stasiun')
        //         ->join('tb_stasiun','tb_stasiun.id = tb_urutan.id_stasiun')
        //         ->where('id_rute', $idRuteSt1->id_rute)
        //         ->where('urutan', $urutanSt1)
        //         ->get()
        //         ->getRow();

        //     // Cek apakah data "waktu" berhasil diambil untuk iterasi berikutnya
        //     if ($nextWaktu) {
        //         // Lakukan sesuatu dengan $nextWaktu->waktu

        //         // Update $waktuSt1 untuk iterasi berikutnya
        //         $waktuSt1 = $nextWaktu;
        //     } else {
        //         echo "Data waktu tidak ditemukan untuk id_rute = $idRuteSt1->id_rute dan urutan = $urutanSt1";
        //         break; // Hentikan loop jika data tidak ditemukan
        //     }

        //     // Tingkatkan nilai $p untuk iterasi berikutnya
        //     $p++;
        //     $nomor++;
        // }

        // // Tampilkan total waktu
        // echo "Total Waktu: " . $totalWaktu;


        
    }

    
}
