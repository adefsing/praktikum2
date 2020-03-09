<?php
//ini adalah definisi class librari baru yaitu "Malasngoding""
class Malasngoding
{
    //ini adalah method "nama_saya" yang bisa di gunakan oleh controller lain
    function nama_saya()
    {
        echo "Nama saya adalah malasngoding !";
    }
    //ini adalah method yang membutuhkan parameter $nama untuk dijalankan
    function nama_kamu($nama)
    {
        echo "Nama kamu adalah " . $nama . " !";
    }
}
