<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Group extends FilamentModel
{
    use HasFactory;
    protected $primaryKey = 'name';

    public function genre(): HasOne
    {
        return $this->hasOne(Genre::class, 'id', 'genre_id');
    }
}
