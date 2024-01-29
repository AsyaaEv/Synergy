<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'foto',
        'kode',
        'mapel',
        'guru',
        'nip',
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'nama', 'nama');
    }
}
