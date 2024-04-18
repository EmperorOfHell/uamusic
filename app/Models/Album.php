<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Album extends FilamentModel
{
    use HasFactory;

    protected $primaryKey = 'name';

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'group_name');
    }

    public function albumType(): BelongsTo
    {
        return $this->belongsTo(AlbumType::class, 'num_of_songs');
    }
}
