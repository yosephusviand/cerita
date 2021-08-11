<?php

namespace App\Http\Controllers;

use App\Models\Diskusi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

			$data			=	new User;
			$data->name		=	$request->nama;
			$data->email	=	$request->email;
			$data->password	=	Hash::make($request->password);
			$data->save();
		} else {
			$edit			=	User::find($request->idedit);
			$edit->name		=	$request->nama;
			$edit->email	=	$request->email;
			$edit->password	=	Hash::make($request->password);
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
        return view('admin.informasi');
    }

    public function piagam()
    {
        return view('admin.piagam');
    }
}
