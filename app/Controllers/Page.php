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
        echo "halaman terms of service";
    }

    public function biodata()
    {
        echo "Nama: Muhammad Deni Firmansyah<br>";
        echo "NIM: 4122017<br>";
        echo "Prodi: Sistem Informasi<br>";
    }
}
