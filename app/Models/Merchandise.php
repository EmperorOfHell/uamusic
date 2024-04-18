<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Merchandise extends FilamentModel
{
    use HasFactory;
    public $primaryKey = 'name';

    public function tour(): BelongsTo
    {
        return $this->belongsTo(Tour::class, 'tour_name');
    }


}
