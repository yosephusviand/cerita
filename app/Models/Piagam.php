<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Piagam extends Model
{
    use HasFactory;
    protected $table = 'piagam';
    protected $appends = ['jenisnya'];

    public function getJenisnyaAttribute()
    {
        if ($this->jenis == 1) {
            return 'Pembaca';
        } else {
            return 'Penulis';
        }
    }

    public static function nosurat()
    {
        $bulan  =   date('m');
        $max    =   Piagam::whereMonth('tanggal', $bulan)->max('nosurat');
        $count  =   Piagam::whereMonth('tanggal', $bulan)->count('nosurat');
        $urut   =   Piagam::select(DB::raw('max(SUBSTR(nosurat,1,4)) as max'))->whereMonth('tanggal', $bulan)->first();

        if ($bulan == 1) {
            $romawi =   'I';
        } elseif ($bulan == 2) {
            $romawi = 'II';
        } elseif ($bulan == 3) {
            $romawi = 'III';
        } elseif ($bulan == 4) {
            $romawi = 'IV';
        } elseif ($bulan == 5) {
            $romawi = 'V';
        } elseif ($bulan == 6) {
            $romawi = 'VI';
        } elseif ($bulan == 7) {
            $romawi = 'VII';
        } elseif ($bulan == 8) {
            $romawi = 'VIII';
        } elseif ($bulan == 9) {
            $romawi = 'IX';
        } elseif ($bulan == 10) {
            $romawi = 'X';
        } elseif ($bulan == 11) {
            $romawi = 'XI';
        } else {
            $romawi = 'XII';
        }

        if ($urut->max == null) {
            $nomor  =   sprintf("%04s", ($count+1)) . '/' . $romawi . '/Kesbangpol/' . date('Y');
        } else {
            $nomor  =    sprintf("%04s", ($urut->max +1)) . '/' . $romawi . '/Kesbangpol/' . date('Y');
        }

        return $nomor;
    }
}
