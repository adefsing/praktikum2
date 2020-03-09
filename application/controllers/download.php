<?php
//ini adalah baris kode yang mencegah akses secara langsung pada controller
defined('BASEPATH') or exit('No direct script access allowed');

//ini adalah class "Download" 
class Download extends CI_Controller
{

    //ini adalah function yang aakan di jalankan pertama kali dan sekali secara otomatis
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'download'));
    }
    //ini adalah method "index" yang akan diakses ketika controller ini dijalankan
    public function index()
    {
        $this->load->view('v_download');
    }
    //ini adaalh method "lakukan_download" yanga akan dijalankan ketika klik link gambar
    public function lakukan_download()
    {
        //ini adalah baris kode yang akan berjalan dan mendownload gambar dari lokasi file gambar/gambar.png
        force_download('gambar/gambar.png', NULL);
    }
}
