<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        // Artikel
        $artikels = Artikel::all();
        $artikel_terbaca = Artikel::sum('artikel_view');
        $artikel_headline = Artikel::wherekategori_id(1)->count();
        // dd($artikel_headline);

        return view('home', compact(
            'users',
            'artikels',
            'artikel_terbaca',
            'artikel_headline'
        ));
    }
}
