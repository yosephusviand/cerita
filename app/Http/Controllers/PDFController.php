<?php

namespace App\Http\Controllers;

use App\Models\Piagam;
use App\Models\Piagam_mas;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PDFController extends Controller
{
    //

    public function index(Request $request, $id)
    {
        $data   =   Piagam::find($id);
        $ttd    =   Piagam_mas::where('status', 2)->first();
        $path   = storage_path('piagam/' . $ttd->foto);
        $qrcode = base64_encode(QrCode::format('svg')->size(100)->errorCorrection('H')->generate(url('generate-pdf/'.$data->id)));
        $pdf    = PDF::loadView('pages.pdf', compact('data', 'qrcode', 'ttd','path'))->setPaper('a4', 'landscape');

        return $pdf->stream('data.pdf');
    }

}
