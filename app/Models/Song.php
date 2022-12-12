<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $table = 'song';
    protected $primaryKey = 'ID';

    public function artist()
    {
        return $this->belongsToMany(Artist::class, 'song_has_artist', 'id', 'id');
    }
    public function playlist()
    {
        return $this->belongsToMany(Playlist::class, 'song_has_playlist', 'id', 'id');
    }
}
