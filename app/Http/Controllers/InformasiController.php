<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class InformasiController extends Controller
{
    public function index()
    {
        $data   =   Informasi::where('status', 2)->get();
        return view('pages.informasi', compact('data'));
    }

    public function liatfoto($id)
    {
        $data   =   Informasi::find($id);

        $path = storage_path('informasi/' . $data->foto);

        $file = File::get($path);

        $type = File::mimeType($path);

        $response = Response::make($file, 200);

        $response->header("Content-Type", $type);

        return $response;
    }
}
