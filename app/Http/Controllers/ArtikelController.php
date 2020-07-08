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

use Illuminate\Http\Request;

// Models
use App\Models\Artikel;

class ArtikelController extends Controller
{
    protected $view = 'pages.artikel.index';

    // List Article
    public function index()
    {
        $section  = 'index';
        $artikels = Artikel::all();

        return view($this->view, compact(
            'artikels',
            'section'
        ));
    }

    // Artickel Content
    public function isi(Request $request)
    {
        $section = 'isi';
        $artikel = Artikel::whereid($request->post)->first();

        return view($this->view, compact(
            'artikel',
            'section'
        ));
    }

    // Publish Article
    public function publishArtikel(Request $request)
    {
        $id = $request->post;

        $publish = Artikel::FindOrFail($id);
        $publish->update([
            'status' => 1
        ]);

        return redirect()
            ->route('master-artikel.isi', 'post=' . $id)
            ->withSuccess('Artikel Berhasil Terpublish !');
    }

    // Delete Article
    public function delete(Request $request)
    {
        Artikel::whereid($request->artikel)->delete();

        return redirect()
            ->back()
            ->withSuccess('Data berhasil dihapus !');
    }
}
