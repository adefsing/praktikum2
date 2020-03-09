<?php
defined('BASEPATH') or exit('No direct script access allowed');
//ini adalah class "Ngoding" yang berfungsi untuk penerapan librari
class Ngoding extends CI_Controller
{
    //ini adalah method "index' yang akan di akses saat controller di jalankan 
    function index()
    {
        //ini adalah baris kode untuk memuat kode librari 
        $this->load->library('malasngoding');
        //ini adalah baris kode yang memanggil method yang ada pada libraries 
        $this->malasngoding->nama_saya();
        echo "<br/>";
        //ini adalah baris kode yang memanggil method yang ada pada libraris dan membutuhkan 1 prarameter
        $this->malasngoding->nama_kamu("Andi");
    }
}
