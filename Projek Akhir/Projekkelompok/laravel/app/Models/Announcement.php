<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     * Laravel akan otomatis menggunakan 'announcements' jika nama model adalah 'Announcement'.
     * Anda bisa definisikan secara eksplisit jika mau:
     * protected $table = 'announcements';
     */

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'subject',
        'content',
        'sender',
        'publish_date',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'publish_date' => 'date', // atau 'datetime' jika kolom di DB adalah timestamp
    ];
}