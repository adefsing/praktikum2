<?php
//ini adalah definisi class model "M_data"
class M_data extends CI_Model
{
    ///ini adalah method ambil data dari tabel user dari database
    function ambil_data()
    {
        return $this->db->get('user');
    }
}
