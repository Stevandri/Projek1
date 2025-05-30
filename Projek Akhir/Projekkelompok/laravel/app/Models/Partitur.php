<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partitur extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'pencipta',
        'file_path',
        'sampul_path',
    ];
}