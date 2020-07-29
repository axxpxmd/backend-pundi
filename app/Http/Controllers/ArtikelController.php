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
use Illuminate\Support\Facades\Auth;

// Models
use App\Models\Artikel;

class ArtikelController extends Controller
{
    protected $view = 'pages.artikel.index';

    // List Article Verified
    public function terverifikasi()
    {
        $section  = 'artikelTerverifikasi';
        $artikelTerverifikasi = Artikel::wherestatus(1)->with('user')->with('kategori')->get();

        return view($this->view, compact(
            'artikelTerverifikasi',
            'section'
        ));
    }

    // List Article Unverified
    public function belumTerverifikasi()
    {
        $section = 'artikelBelumTerverifikasi';
        $artikelBelumTerverifikasi = Artikel::wherestatus(0)->get();

        return view($this->view, compact(
            'artikelBelumTerverifikasi',
            'section'
        ));
    }

    // Artickel Content
    public function isi(Request $request)
    {
        $section = 'isi';
        $artikel = Artikel::whereid($request->artikel_id)->first();

        return view($this->view, compact(
            'artikel',
            'section'
        ));
    }

    // Edit Artikel
    public function editArtikel(Request $request)
    {
        $section = 'editArtikel';
        $artikel = Artikel::whereid($request->artikel_id)->first();

        return view($this->view, compact(
            'artikel',
            'section'
        ));
    }

    // Update Artikel 
    public function updateArtikel(Request $request)
    {
        $request->validate([
            'judul'  => 'required',
            'isi'    => 'required|min:700',
        ]);

        $id        = $request->artikel_id;
        $editor_id = Auth::user()->id;
        $judul     = $request->judul;
        $isi       = $request->isi;

        if ($request->gambar != null) {
            $file     = $request->file('gambar');
            $fileName = time() . "." . $file->getClientOriginalName();
            $request->file('gambar')->move(config('app.path_local') . 'artikel/', $fileName);
            $gambar   = $fileName;
        }

        if ($request->gambar != null) {
            $artikel = Artikel::findOrFail($id);
            $artikel->update([
                'judul'     => $judul,
                'gambar'    => $gambar,
                'isi'       => $isi,
                'editor_id' => $editor_id
            ]);
        }

        $artikel = Artikel::findOrFail($id);
        $artikel->update([
            'judul'     => $judul,
            'isi'       => $isi,
            'editor_id' => $editor_id
        ]);

        return redirect()
            ->route('master-artikel.editArtikel', 'artikel_id=' . $id)
            ->withSuccess('Artikel Berhasil diperbaharui !');
    }

    // Publish Article
    public function publishArtikel(Request $request)
    {
        $id = $request->artikel_id;
        $editor_id = Auth::user()->id;

        $publish = Artikel::FindOrFail($id);
        $publish->update([
            'status'    => 1,
            'editor_id' => $editor_id
        ]);

        return redirect()
            ->route('master-artikel.isi', 'artikel_id=' . $id)
            ->withSuccess('Artikel Berhasil Terpublish !');
    }

    // Unpublish Article
    public function UnpublishArtikel(Request $request)
    {
        $id = $request->artikel_id;
        $editor_id = Auth::user()->id;

        $publish = Artikel::FindOrFail($id);
        $publish->update([
            'status' => 0,
            'editor_id' => $editor_id
        ]);

        return redirect()
            ->route('master-artikel.isi', 'artikel_id=' . $id)
            ->withSuccess('Artikel Berhasil Ditarik kembali !');
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
