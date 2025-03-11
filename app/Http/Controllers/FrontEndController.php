<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Testimoni;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view('home.frontendUser.blog', compact(['artikel']));
    }

    public function testimoni()
    {
        $testimoni = Testimoni::all();
        return view('home.frontendUser.testimoni', compact(['testimoni']));
    }

    public function home()
    {
        return view('home.frontendUser.home');
    }
    
    public function contact()
    {
        return view('home.frontendUser.contact');
    }
}
