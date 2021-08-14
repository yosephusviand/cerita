<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use Illuminate\Http\Request;

class PitcbookController extends Controller
{
    public function index()
    {
        $data   =   Karya::where('jenis', 3)->where('status', 2)->paginate(12);
        return view('pages.pictbook', compact('data'));
    }
}
