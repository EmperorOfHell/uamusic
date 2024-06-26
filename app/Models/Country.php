<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends FilamentModel
{
    use HasFactory;

    protected $primaryKey = 'name';

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
