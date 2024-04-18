<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Group extends FilamentModel
{
    use HasFactory;
    protected $primaryKey = 'name';

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class, 'genre_name' );
    }
    public function performers(): HasMany
    {
        return $this->hasMany(Performer::class);
    }

    public function songs()
    {
        return $this->hasManyThrough(Song::class, Album::class, );
    }
}
