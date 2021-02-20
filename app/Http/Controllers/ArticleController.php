<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles($id)
    {
        echo "Halaman Artikel dengan Id $id";
    }

    public function news(){
        return redirect('https://www.educastudio.com/news');
    }

    public function newsString($string){
        return redirect("https://www.educastudio.com/news/" . $string );
    }
}
