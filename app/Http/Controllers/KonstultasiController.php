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
use App\Models\Konsultasi;
use App\Models\Pertanyaan;

class KonstultasiController extends Controller
{
    protected $view = 'pages.konsultasi.index';

    // List Question
    public function pertanyaan()
    {
        $section = 'pertanyaan';
        $pertanyaan = Pertanyaan::all();

        return view($this->view, compact(
            'section',
            'pertanyaan'
        ));
    }

    // Question
    public function isiPertanyaan(Request $request)
    {
        $section = 'isiPertanyaan';
        $pertanyaan_id = $request->pertanyaan_id;

        // Confirm By
        $confirm_id = Auth::user()->id;
        $pertanyaan = Pertanyaan::findOrFail($pertanyaan_id);
        $pertanyaan->update([
            'confirm_id' => $confirm_id,
            'status' => 1
        ]);

        $isiPertanyaan = Pertanyaan::whereid($pertanyaan_id)->first();

        return view($this->view, compact(
            'section',
            'isiPertanyaan'
        ));
    }

    // Delete Question
    public function deletePertanyaan(Request $request)
    {
        $pertanyaan_id = $request->pertanyaan_id;
        Pertanyaan::whereid($pertanyaan_id)->delete();

        return redirect()
            ->back()
            ->withSuccess('Pertanyaan berhasil dihapus !');
    }

    // List Consultation
    public function konsultasi(Request $request)
    {
        $section = 'konsultasi';
        $konsultasi = Konsultasi::all();

        return view($this->view, compact(
            'section',
            'konsultasi'
        ));
    }

    // Consultation
    public function isiKonsultasi(Request $request)
    {
        $section = 'isiKonsultasi';
        $konsultasi_id = $request->konsultasi_id;

        // Confirm By
        $confirm_id = Auth::user()->id;
        $konsultasi = Konsultasi::findOrFail($konsultasi_id);
        $konsultasi->update([
            'confirm_id' => $confirm_id,
            'status' => 1
        ]);

        $isiKonsultasi = Konsultasi::whereid($konsultasi_id)->first();

        return view($this->view, compact(
            'section',
            'isiKonsultasi'
        ));
    }

    // Delete Consultation
    public function deleteKonsultasi(Request $request)
    {
        $konsultasi_id = $request->konsultasi_id;
        Konsultasi::whereid($konsultasi_id)->delete();

        return redirect()
            ->back()
            ->withSuccess('Konsultasi berhasil dihapus!');
    }
}
