<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Song extends FilamentModel
{
    use HasFactory;

    protected $primaryKey = 'name';

    public function albums(): BelongsTo
    {
        return $this->belongsTo(Album::class, 'album_name');
    }
}
