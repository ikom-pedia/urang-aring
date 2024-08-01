<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_Admin;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new M_Admin();
    }

    public function index()
    {
        //
        $data = [
            'title' => 'Dashboard',
        ];
        return view('admin/dashboard', $data);
    }

    public function staff()
    {
        $data = [
            'vStaff' => $this->model->vStaff()->getResultArray(),
            'title' => 'Data Staff',
        ];
        return view('admin/staff', $data);
    }

    public function dosen()
    {
        $data = [
            'vDosen' => $this->model->vDosen()->getResultArray(),
            'title' => 'Data Dosen',
        ];
        return view('admin/dosen', $data);
    }

    public function mahasiswa()
    {
        $data = [
            'vMahasiswa' => $this->model->vMahasiswa()->getResultArray(),
            'title' => 'Data Mahasiswa',
        ];
        return view('admin/mahasiswa', $data);
    }

    public function akun()
    {
        $data = [
            'title' => 'My Account',
        ];
        return view('admin/account', $data);
    }

    public function log()
    {
        $data = [
            'title' => 'Activity',
        ];
        return view('admin/activity', $data);
    }
}
