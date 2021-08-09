<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use Illuminate\Http\Request;

class KomikController extends Controller
{
    public function index()
    {
        $data   =   Karya::where('jenis', 2)->paginate(12);
        return view('pages.komik', compact('data'));
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
