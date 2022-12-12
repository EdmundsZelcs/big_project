<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table = 'genre';
    protected $primaryKey = 'ID';
    

    public function song()
    {
        return $this->belongsToMany(Song::class, 'genre_has_song', 'id', 'id');
    }
}
