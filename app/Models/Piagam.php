<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
