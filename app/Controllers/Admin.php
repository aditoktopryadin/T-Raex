<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        return view('view_admin/admin_main');
    }

    public function rute()
    {
        return view('view_admin/v_rute');
    }

    public function stasiun()
    {
        return view('view_admin/v_stasiun');
    }
}
