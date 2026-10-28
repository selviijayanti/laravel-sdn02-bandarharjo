<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    use HasFactory;

    protected $table = 'lombas';

    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal',
        'status',
        'gambar'
    ];

}
