<?php

namespace App\Http\Controllers;

use App\Models\Diskusi;
use Illuminate\Http\Request;

class DiskusiController extends Controller
{
    public function index()
    {
        $data   =   Diskusi::where('status', 1)->get();
        return view('pages.diskusi', compact('data'));
    }

    public function store(Request $request)
    {
        $data           =   new Diskusi;
        $data->email    =   $request->email;
        $data->diskusi  =   $request->diskusi;
        $data->user     =   1;
        $data->save();

        return back()->with('status', 1)->with('message', 'Berhasil Simpan');
    }
}
