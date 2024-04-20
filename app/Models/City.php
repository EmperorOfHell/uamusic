<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class City extends FilamentModel
{
    use HasFactory;

    protected $primaryKey = 'name';

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_name');
    }

    public function tickets(): HasManyThrough
    {
        return $this->hasManyThrough(Ticket::class, Concert::class);
    }

    public function concerts()
    {
        return $this->hasMany(Concert::class);
    }

}
