<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'angkatan',
        'cover',
        'walikelas',
        'prestasi',
        'memories',
        'slogan',
    ];

    public function wali(){
        return $this->belongsTo(Wali::class, 'nama', 'nama');
    }
}
