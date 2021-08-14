<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use App\Models\Piagam;
use Illuminate\Http\Request;

class AdminKaryaController extends Controller
{
    public function cernak()
    {

        return view('admin.cernak');
    }

    public function tablecernak()
    {
        $data   =   Karya::where('jenis', 1)->get();
        return view('admin.tablecernak', compact('data'));
    }

    public function komik()
    {
        $data   =   Karya::where('jenis', 2)->get();
        return view('admin.komik', compact('data'));
    }

    public function tablekomik()
    {
        $data   =   Karya::where('jenis', 2)->get();
        return view('admin.tablecernak', compact('data'));
    }

    public function pictbook()
    {
        $data   =   Karya::where('jenis', 3)->get();
        return view('admin.pictbook', compact('data'));
    }

    public function tablepictbook()
    {
        $data   =   Karya::where('jenis', 3)->get();
        return view('admin.tablecernak', compact('data'));
    }

    public function puisi()
    {
        $data   =   Karya::where('jenis', 4)->get();
        return view('admin.puisi', compact('data'));
    }

    public function tablepuisi()
    {
        $data   =   Karya::where('jenis', 4)->get();
        return view('admin.tablecernak', compact('data'));
    }

    public function karyatampil(Request $request)
    {
        $data           =   Karya::find($request->id);
        $data->status   =   2;
        $data->save();

        if ($data) {
            $piagam         =   new Piagam;
            $piagam->nama   =   $data->nama;
            $piagam->jenis  =   2;
            $piagam->save();
        }
    }

    public function karyatidaktampil(Request $request)
    {
        $data           =   Karya::find($request->id);
        $data->status   =   1;
        $data->save();

    }

    public function karyastore(Request $request)
    {
        if ($request->hasFile('file')) {
            $file               =   $request->file('file');
            $id                 =   date('Ymd');
            $filefile           =   $id . '_' .  str_replace(" ", "_", $file->getClientOriginalName());

            if ($request->idedit == '') {
                $data           =   new Karya;
                $data->nama     =   $request->nama;
                $data->judul    =   $request->judul;
                $data->jenis    =   $request->kategori;
                $data->file     =   $filefile;
                $data->save();

                if ($data) {
                    $tujuan_upload = storage_path('karya');
                    $file->move($tujuan_upload, $filefile);
                }
            } else {
                $data       =   Karya::find($request->idedit);
                $data->nama     =   $request->nama;
                $data->judul    =   $request->judul;
                $data->jenis    =   $request->kategori;
                $data->file     =   $filefile;
                $data->save();

                if ($data) {
                    $tujuan_upload = storage_path('karya');
                    $file->move($tujuan_upload, $filefile);
                }
            }
        } else {
            if ($request->idedit == '') {
                $data           =   new Karya;
                $data->nama     =   $request->nama;
                $data->judul    =   $request->judul;
                $data->jenis    =   $request->kategori;
                $data->save();
            } else {
                $data       =   Karya::find($request->idedit);
                $data->nama     =   $request->nama;
                $data->judul    =   $request->judul;
                $data->jenis    =   $request->kategori;
                $data->save();
            }
        }

        return back()->with('status', 1)->with('message', 'Berhasil Simpan');

    }

    public function edit(Request $request)
    {
        return Karya::find($request->id);
    }

    public function karyadestroy($id)
    {
        $data   =   Karya::find($id);
        $data->delete();

        return back()->with('status', 1)->with('message', 'Berhasil Hapus Data');
    }
}
