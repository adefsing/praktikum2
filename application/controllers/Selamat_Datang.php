<?php
defined('BASEPATH') or exit('No direct script access allowed');
//ini adalah class untuk menampilkan view
class Selamat_Datang extends CI_Controller
{
    //ini adalah function yang akan di jalankan pertama kali secara automatis
    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
    }
    //ini adalah method index yang akan diakses saat controller di jalankan
    public function index()
    {
        $this->load->view('view_belajar');
    }
}
