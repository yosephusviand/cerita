<?php

namespace App\Http\Controllers;

use App\Models\Piagam;
use Illuminate\Http\Request;

class PiagamController extends Controller
{
    //

    public function index()
    {
        $data   =   Piagam::all();

        return view('pages.piagam', compact('data'));
    }

    public function store(Request $request)
    {
        $data           =   new Piagam;
        $data->nama     =   strtoupper($request->nama);
        $data->jenis    =   1;
        $data->save();

        return back()->with('status', 1)->with('message', 'Berhasil Simpan');
    }
}
