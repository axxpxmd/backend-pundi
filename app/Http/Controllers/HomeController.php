<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of welcome
 *
 * @author Asip Hamdi
 * Github : axxpxmd
 */

namespace App\Http\Controllers;

// Models
use App\User;
use App\Models\Artikel;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Users
        $users = User::all();

        // Article
        $artikels = Artikel::all();
        $artikel_terbaca  = Artikel::sum('artikel_view');
        $artikel_status   = Artikel::wherestatus(0)->count();

        // Count Kategori in artikel
        $artikel_headline   = Artikel::wherekategori_id(1)->count();
        $artikel_indepth    = Artikel::wherekategori_id(2)->count();
        $artikel_kebijakan  = Artikel::wherekategori_id(3)->count();
        $artikel_serbaserbi = Artikel::wherekategori_id(4)->count();
        $artikel_konsultasi = Artikel::wherekategori_id(5)->count();

        return view('home', compact(
            'users',
            'artikels',
            'artikel_terbaca',
            'artikel_status',
            'artikel_headline',
            'artikel_indepth',
            'artikel_kebijakan',
            'artikel_serbaserbi',
            'artikel_konsultasi'
        ));
    }
}
