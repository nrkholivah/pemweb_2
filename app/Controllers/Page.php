<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "about page";
    }
    public function contact()
    {
        echo "contact page";
    }
    public function faqs()
    {
        echo "faqs page";
    }
    public function tos()
    {
        echo "Halaman Term of Service";
    }
    public function biodata()
    {
        echo "Biodata Saya<br>";
        echo "Nama: Nur Kholivah<br>";
        echo "Tempat, tanggal lahir: Delima Jaya, 17 Januari 2005<br>";
        echo "Alamat: Pare, Kediri<br>";
    }
}
