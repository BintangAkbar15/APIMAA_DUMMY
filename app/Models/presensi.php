<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class presensi extends Model
{
    protected $fillable = [
        'karyawan_id',
        'photo',
        'in',
        'out',
        'status',
        'out_range_reason'
    ];

    public function karyawan() {
        return $this->hasMany(karyawan::class);
    }
}
