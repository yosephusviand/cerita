<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class CernakController extends Controller
{
    //

    public function index()
    {
        $data   =   Karya::where('jenis', 1)->paginate(12);
        return view('pages.cernak', compact('data'));
    }

    public function liatpdf($id)
    {
        $data   =   Karya::find($id);

        $path = storage_path('karya/' . $data->file);

        return response()->file($path);
    }

    public function pdfdownload($id)
    {
        $data   =   Karya::find($id);

        $path = storage_path('karya/' . $data->file);

        return response()->download($path);
    }
}
