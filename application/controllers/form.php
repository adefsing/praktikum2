<?php

class Form extends CI_Controller
{
    //ini adalah baris kode function yang akan di jalankan otomatis pertama kali
    function __construct()
    {
        parent::__construct();
        //ini adalah baris kode yang memuat librari "form_validation"
        $this->load->library('form_validation');
    }
    //ini adalah method "index" yang akan di akses saat controller dijalankan 
    function index()
    {
        //ini adalah method menampilkan view form
        $this->load->view('v_form');
    }
    //ini adalah method "aksi" yang akan berjalan ketika tombol submit di klik
    function aksi()
    {
        //ini adalah baris kode yang akan melakukan validasi form
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('konfir_email', 'Konfirmasi Email', 'required');

        //ini adalah if else yang dijalankan jika benar menampilkan text form validation oke, dan jika tidak maka akan di kembalikan ke view form
        if ($this->form_validation->run() != false) {
            echo "Form validation oke";
        } else {
            $this->load->view('v_form');
        }
    }
}
