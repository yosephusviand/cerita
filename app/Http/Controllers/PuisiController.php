<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use Illuminate\Http\Request;

class PuisiController extends Controller
{
    public function index()
    {
        $data   =   Karya::where('jenis', 4)->where('status', 2)->simplePaginate(6);
        return view('pages.puisi', compact('data'));
    }
}
