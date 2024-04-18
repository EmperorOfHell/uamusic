<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends FilamentModel
{
    use HasFactory;

    protected $primaryKey = 'name';

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_name');
    }

}
