<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Artikel;

class ArtikelController extends Controller
{
    protected $view = 'pages.artikel.index';

    public function index()
    {
        $section = 'index';
        $artikels = Artikel::all();

        return view($this->view, compact(
            'artikels',
            'section'
        ));
    }

    public function isi(Request $request)
    {
        $section = 'isi';
        $artikel = Artikel::whereid($request->post)->first();

        return view($this->view, compact(
            'artikel',
            'section'
        ));
    }
}
