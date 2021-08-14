<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piagam_mas extends Model
{
    use HasFactory;

    protected $table = 'piagam_mas';
    protected $appends = 'status_now';

    public function getStatusNowAttribute()
    {
        if ($this->status == 1) {
            echo ' <span class="badge badge-danger">Tidak Tampil</span>';
        } else {
            echo ' <span class="badge badge-primary">Tampil</span>';
        }
    }
}
