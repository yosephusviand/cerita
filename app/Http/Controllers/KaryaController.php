<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KaryaController extends Controller
{
    public function index()
    {
        return view('pages.karya');
    }

    public function store(Request $request)
    {
        $file               =   $request->file('file');
        $id                 =   date('Ymd');
        $filefile           =   $id . '_' .  str_replace(" ", "_", $file->getClientOriginalName());

        $data           =   new Karya;
        $data->nama     =   $request->nama;
        $data->alamat   =   $request->alamat;
        $data->nohp     =   $request->nohp;
        $data->judul    =   $request->judul;
        $data->jenis    =   $request->kategori;
        $data->file     =   $filefile;
        $data->save();

        if ($data) {
            $tujuan_upload = storage_path('karya');
            $file->move($tujuan_upload, $filefile);
        }

        return back()->with('status', 1)->with('message', 'Berhasil Simpan');
    }
}
