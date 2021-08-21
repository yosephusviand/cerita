<?php

namespace App\Http\Controllers;

use App\Models\Piagam;
use Carbon\Carbon;
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
        $data->alamat   =   strtoupper($request->alamat);
        $data->nohp     =   $request->nohp;
        $data->tanggal  =   Carbon::now();
        $data->nosurat  =   Piagam::nosurat();
        $data->jenis    =   1;
        $data->save();

        return back()->with('status', 1)->with('message', 'Berhasil Simpan');
    }
}
