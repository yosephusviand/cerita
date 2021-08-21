<?php

namespace App\Http\Controllers;

use App\Models\Aduan;
use Illuminate\Http\Request;

class AduanController extends Controller
{
    public function index()
    {
        return view('pages.aduan');
    }

    public function store(Request $request)
    {
        $data           =   new Aduan;
        $data->nama     =   $request->nama;
        $data->nohp     =   $request->nohp;
        $data->keluhan  =   $request->keluhan;
        $data->save();

        return back()->with('status', 1)->with('message', 'Berhasil Simpan');
    }
}
