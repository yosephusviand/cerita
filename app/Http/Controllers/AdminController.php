<?php

namespace App\Http\Controllers;

use App\Models\Aduan;
use App\Models\Diskusi;
use App\Models\Informasi;
use App\Models\Piagam;
use App\Models\Piagam_mas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.home');
    }

    public function diskusi()
    {
        $data   =   Diskusi::whereIn('status', [1, 2])->get();
        return view('admin.diskusi', compact('data'));
    }

    public function diskusistore(Request $request)
    {
        $user           =   User::find(Auth::user()->id);
        $data           =   new Diskusi;
        $data->email    =   $user->email;
        $data->diskusi  =   $request->diskusi;
        $data->user     =   2;
        $data->save();

        return back()->with('status', 1)->with('message', 'Berhasil Simpan');
    }

    public function diskusisembunyi(Request $request)
    {
        if ($request->key == 'hilangkan') {
            $data           =   Diskusi::find($request->id);
            $data->status   =   2;
            $data->save();
        } else {
            $data           =   Diskusi::find($request->id);
            $data->status   =   1;
            $data->save();
        }
    }

    public function diskusihaspus(Request $request)
    {
        $data   =   Diskusi::find($request->id);
        $data->delete();
    }

    public function akun()
    {
        $data   =   User::all();
        return view('admin.akun', compact('data'));
    }

    public function akunstore(Request $request)
    {
        if ($request->idedit == '') {

            $data            =    new User;
            $data->name      =    $request->nama;
            $data->email     =    $request->email;
            $data->password  =    Hash::make($request->password);
            $data->save();
        } else {
            $edit            =    User::find($request->idedit);
            $edit->name      =    $request->nama;
            $edit->email     =    $request->email;
            $edit->password  =    Hash::make($request->password);
            $edit->save();
        }

        return back()->with('status', 1)->with('message', 'Berhasil Simpan Data');
    }

    public function akunedit(Request $request)
    {
        return User::find($request->id);
    }

    public function akundestroy($id)
    {
        $data   =   User::find($id);
        $data->delete();

        return back()->with('status', 1)->with('message', 'Berhasil Hapus Data');
    }

    public function informasi()
    {
        $data   =   Informasi::all();

        return view('admin.informasi', compact('data'));
    }

    public function piagam()
    {
        $data   =   Piagam_mas::all();
        return view('admin.piagam', compact('data'));
    }

    public function piagam_store(Request $request)
    {
        if ($request->hasFile('file')) {
            $file               =   $request->file('file');
            $id                 =   date('Ymd');
            $filefile           =   $id . '_' .  str_replace(" ", "_", $file->getClientOriginalName());

            $data           =   new Piagam_mas;
            $data->nama     =   $request->nama;
            $data->jabatan  =   $request->jabatan;
            $data->foto     =   $filefile;
            $data->status    =   1;
            $data->save();

            if ($data) {
                $tujuan_upload = storage_path('piagam');
                $file->move($tujuan_upload, $filefile);
            }
        } else {
            $data           =   new Piagam_mas;
            $data->nama     =   $request->nama;
            $data->jabatan  =   $request->jabatan;
            $data->status    =   1;
            $data->save();
        }
        return back()->with('status', 1)->with('message', 'Berhasil Simpan');
    }

    public function liatfoto($id)
    {
        $data   =   Piagam_mas::find($id);

        $path = storage_path('piagam/' . $data->foto);

        $file = File::get($path);

        $type = File::mimeType($path);

        $response = Response::make($file, 200);

        $response->header("Content-Type", $type);

        return $response;
    }

    public function liatinfo($id)
    {
        $data   =   Informasi::find($id);

        $path = storage_path('informasi/' . $data->foto);

        $file = File::get($path);

        $type = File::mimeType($path);

        $response = Response::make($file, 200);

        $response->header("Content-Type", $type);

        return $response;
    }

    public function destroypiagam($id)
    {
        $data   =   Piagam_mas::find($id);
        $data->delete();

        return back()->with('status', 1)->with('message', 'Berhasil Dihapus');
    }

    public function piagam_aktif($id)
    {
        $data            =   Piagam_mas::find($id);
        $data->status    =   2;
        $data->save();

        return back()->with('status', 1)->with('message', 'Berhasil Diaktifkan');
    }

    public function piagam_nonaktif($id)
    {
        $data            =   Piagam_mas::find($id);
        $data->status    =   1;
        $data->save();

        return back()->with('status', 1)->with('message', 'Berhasil Non Aktifkan');
    }

    public function piagamanak()
    {
        $data   =   Piagam::all();
        return view('admin.piagamanak', compact('data'));
    }

    public function destroyanak($id)
    {
        $data   =   Piagam::find($id);
        $data->delete();

        return back()->with('status', 1)->with('message', 'Berhasil Hapus Data');
    }

    public function informasi_store(Request $request)
    {
        if ($request->hasFile('file')) {
            $file               =   $request->file('file');
            $id                 =   date('Ymd');
            $filefile           =   $id . '_' .  str_replace(" ", "_", $file->getClientOriginalName());

            if ($request->idedit == '') {
                $data           =   new Informasi;
                $data->nama     =   $request->nama;
                // $data->tanggal  =   $request->tanggal;
                $data->foto     =   $filefile;
                $data->save();
                if ($data) {
                    $tujuan_upload = storage_path('informasi');
                    $file->move($tujuan_upload, $filefile);
                }
            } else {
                $data           =   Informasi::find($request->idedit);
                $data->nama     =   $request->nama;
                // $data->tanggal  =   $request->tanggal;
                $data->foto     =   $filefile;
                $data->save();
                if ($data) {
                    $tujuan_upload = storage_path('informasi');
                    $file->move($tujuan_upload, $filefile);
                }
            }
        } else {
            if ($request->idedit == '') {
                $data           =   new Informasi;
                $data->nama     =   $request->nama;
                // $data->tanggal  =   $request->tanggal;
                $data->save();
            } else {
                $data           =   Informasi::find($request->idedit);
                $data->nama     =   $request->nama;
                // $data->tanggal  =   $request->tanggal;
                $data->save();
            }
        }

        return back()->with('status', 1)->with('message', 'Berhasil Simpan');
    }

    public function destroyinformasi($id)
    {
        $data   =   Informasi::find($id);
        $data->delete();

        return back()->with('status', 1)->with('message', 'Berhasil Hapus Data');
    }

    public function informasi_aktif($id)
    {
        $data           =   Informasi::find($id);
        $data->status   =   2;
        $data->save();

        return back()->with('status', 1)->with('message', 'Berhasil Di Aktifkan');
    }

    public function informasi_nonaktif($id)
    {
        $data           =   Informasi::find($id);
        $data->status   =   1;
        $data->save();

        return back()->with('status', 1)->with('message', 'Berhasil Non Aktifkan');
    }

    public function informasiedit(Request $request)
    {
        $data   =   Informasi::find($request->id);

        $arr    =   ['id' => $data->id, 'nama' => $data->nama, 'tanggal' => $data->tanggal];

        return $arr;
    }

    public function aduan()
    {
        $data   =   Aduan::all();

        return view('admin.aduan', compact('data'));
    }
}
