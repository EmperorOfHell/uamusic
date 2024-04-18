<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Concert extends FilamentModel
{
    use HasFactory;

    protected $primaryKey = 'name';

    public function tour(): BelongsTo
    {
        return $this->belongsTo(Tour::class, 'tour_name');
    }
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_name');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

}

