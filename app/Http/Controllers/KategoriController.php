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

use DataTables;

use Illuminate\Http\Request;

// Model
use App\Models\Kategori;
use App\Models\Sub_Kategori;

class KategoriController extends Controller
{
    protected $view = 'pages.kategori.index';

    public function index()
    {
        $section = 'kategori';
        $kategori = Kategori::select('id', 'n_kategori')->whereNotIn('id', [5])->get();

        return view($this->view, compact(
            'section',
            'kategori'
        ));
    }

    public function dataTable(Request $request)
    {
        $kategori_id = $request->kategori_id;
        $data = Sub_Kategori::where('kategori_id', $kategori_id)->get();

        return DataTables::of($data)
            ->editColumn('id', function ($p) {
                return $p->id;
            })
            ->addColumn('aksi', function ($p) {
                return "<a class='text-white text-decoration-none fs-14' href='" . route('master-kategori.edit', 'sub_kategori_id=' . $p->id) . "' target='_self'><i class='fa fa-edit text-primary mr-2'></i></a>";
            })
            ->rawColumns(['id', 'aksi'])
            ->toJson();
    }

    public function edit(Request $request)
    {
        $section = 'edit';
        $sub_kategori_id = $request->sub_kategori_id;
        $sub_kategori = Sub_Kategori::whereid($sub_kategori_id)->first();

        return view($this->view, compact(
            'section',
            'sub_kategori',
            'sub_kategori_id'
        ));
    }

    public function update(Request $request)
    {
        $sub_kategori_id = $request->sub_kategori_id;
        $n_sub_kategori  = $request->n_sub_kategori;

        $sub_kategori = Sub_Kategori::findOrFail($sub_kategori_id);
        $sub_kategori->update([
            'n_sub_kategori' => $n_sub_kategori
        ]);

        return redirect()
            ->route('master-kategori.edit', 'sub_kategori_id=' . $sub_kategori_id)
            ->withSuccess('Data berhasil diperbaharui !');
    }
}
