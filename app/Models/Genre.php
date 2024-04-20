<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends FilamentModel
{
    use HasFactory;

    protected $primaryKey = 'name';

    public function albums()
    {
        return $this->hasManyThrough(Album::class, Group::class, 'genre_name', 'group_name');
    }
}
