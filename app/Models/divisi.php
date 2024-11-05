<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class divisi extends Model
{
    protected $fillable = [
        'name',
        'manager_id',
        'lead_id',
        'status'
    ];

    public function karyawan() {
        return $this->belongsTo(karyawan::class);
    }
    public function manager() {
        return $this->belongsTo(User::class);
    }
    public function lead() {
        return $this->belongsTo(User::class);
    }
}

