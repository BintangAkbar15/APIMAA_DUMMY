<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    protected $fillable = [
        'name'
    ];
    
    public function level() {
        return $this->belongsTo(User::class);
    }
}
