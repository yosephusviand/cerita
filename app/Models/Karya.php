<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karya extends Model
{
    use HasFactory;
    protected $table = 'karya';
    protected $appends = ['status_name'];

    public function getStatusNameAttribute()
    {
        if ($this->status == 1) {
            echo ' <span class="badge badge-danger">Tidak Tampil</span>';
        } else {
            echo ' <span class="badge badge-primary">Tampil</span>';
        }
    }

}
