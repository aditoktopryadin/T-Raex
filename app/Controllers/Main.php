<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\Rute;

class Main extends BaseController
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
        return view('view_user/v_main');
    }
}
