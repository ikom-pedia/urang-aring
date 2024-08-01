<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Admin extends Model
{
    public function vStaff()
    {
        return $this->db->table('user')
            ->where('role', 'Staff')
            ->get();
    }

    public function vDosen()
    {
        return $this->db->table('user')
            ->where('role', 'Dosen')
            ->get();
    }

    public function vMahasiswa()
    {
        return $this->db->table('user')
            ->where('role', 'Mahasiswa')
            ->get();
    }
}
