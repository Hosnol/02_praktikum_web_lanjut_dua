<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function daftarprogram(){
        echo "Magang <a href='https://www.educastudio.com/program/magang'><button>KLIK!</button></a><br>";
        echo "Karir <a href='https://www.educastudio.com/program/karir'><button>KLIK!</button></a><br>";
        echo "Kunjungan Industri <a href='https://www.educastudio.com/program/kunjungan-industri'><button>KLIK!</button></a>";
    }
}
