<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Testimoni;
use App\Models\Kursus;

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
        $artikel = Artikel::all();
        $testimoni = Testimoni::all();
        $kursus = Kursus::all();
        return view('home.frontendUser.home', compact('artikel', 'testimoni', 'kursus'));
    }

    public function contact()
    {
        return view('home.frontendUser.contact');
    }

    public function course()
    {
        $kursus = Kursus::all();
        return view('home.frontendUser.course', compact('kursus'));
    }
}
