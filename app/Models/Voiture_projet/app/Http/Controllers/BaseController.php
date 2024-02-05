<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\OneMiddleware;
use App\Http\Middleware\TwoMiddleware;
use App\Http\Middleware\ThreeMiddleware;


class BaseController extends Controller
{
    public function oneMethode() 
    {
        return view('methode.oneMethode');
    }
    public function twoMethode() 
    {
        return view('methode.twoMethode');
    }
    public function threeMethode() 
    {
        return view('methode.threeMethode');
    }

    public function __construct()
    {
        $this->middleware(OneMiddleware::class);
        $this->middleware(TwoMiddleware::class)->only(['oneMethode']);
        $this->middleware(ThreeMiddleware::class)->except(['oneMethode']);
    }
}
