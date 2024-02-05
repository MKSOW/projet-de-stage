<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
     public function index_methode()
     {
         return view('acceuil.controller');
     }

     public function salutations ($p1,$p2=7)
     {
        echo "le prenom votre prenom est:", "$p1" ," votre age est :", "$p2" ,"ans";
     }
}
