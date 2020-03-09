<?php
// ini adalah baris kode untuk mencegah akses secara langsung file controller
defined('BASEPATH') or exit('No direct script access allowed');


// ini adalah class "belajar"
class Belajar extends CI_Controller
{

    //ini adalah function yang aakan di jalankan pertama kali dan sekali secara otomatis
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
    }

    //ini adalah method "index" yang akan diakses ketika controller ini dijalankan
    public function index()
    {
        // ini adalah baris kode print text pada halaman index di controller belajar
        echo "ini method index pada controller belajar";
    }

    // ini adalah method "halo" yang mengirimkan data melalui array ke view_belajar
    public function halo()
    {
        // ini adalah array data yang akan di gunakan di view_belajar
        $data = array(
            'judul' => "Cara Membuat View Pada CodeIgniter",
            'tutorial' => "CodeIgniter"
        );

        // ini adalah baris kode untuk memuat view belajar sekalian membawa data array
        $this->load->view('view_belajar', $data);
    }

    // ini adalah method "user" yang mengambil data dari database dan dikirim kepada view_user
    function user()
    {
        // ini adalah variabel data yang berisi hasil query select from tabel user melalui model m_data dan method ambil_data()
        $data['user'] = $this->m_data->ambil_data()->result();
        // ini adalah kode untuk memuat view_user sekalian membawa data dari tabel user
        $this->load->view('v_user.php', $data);
    }
}
