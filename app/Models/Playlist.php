<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $table = 'playlist';
    protected $primaryKey = 'ID';

    protected $fillable = [
        'playlist_name',
        'playlist_total_songs',
        'playlist_lenght',
        'user_id',
    ];
}
