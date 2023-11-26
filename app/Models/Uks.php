<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uks extends Model
{
    use HasFactory;

    protected $fillable = [
        'nis',
        'name',
        'kelas',
        'jurusan',
        'angkatan',
        'jk',
        'sakit',
        'penanganan',
        'petugas',
    ];
}
