<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $fillable = [
        'fullname',
        'telp',
        'email',
        'date_of_birth',
        'education',
        'is_married',
        'address',
        'nik',
        'timezone',
        'nip',
        'username',
        'password',
        'contract',
        'divisi_id'
    ];

    public function divisi() {
        return $this->hasOne(divisi::class);
    }
    public function aktifitas() {
        return $this->belongsTo(aktifitas::class);
    }
    public function presensi() {
        return $this->belongsTo(presensi::class);
    }
}
