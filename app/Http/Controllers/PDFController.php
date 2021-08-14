<?php

namespace App\Http\Controllers;

use App\Models\Piagam;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PDFController extends Controller
{
    //

    public function index(Request $request, $id)
    {
        $data   =   Piagam::find($id);
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate($data->id));
        $pdf = PDF::loadView('pages.pdf', compact('data','qrcode'))->setPaper('a4', 'landscape');

        return $pdf->stream('data.pdf');
    }
}
