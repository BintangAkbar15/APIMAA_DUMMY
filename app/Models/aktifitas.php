<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aktifitas extends Model
{
    protected $fillable = [
        'karyawan_id',
        'project_name',
        'task',
        'date',
        'status'
    ];

    public function karyawan() {
        return $this->hasMany(karyawan::class);
    }
}
