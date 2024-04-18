<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Ticket extends FilamentModel
{
    use HasFactory;

    protected $primaryKey = 'ticket_number';

    public function concert(): BelongsTo
    {
        return $this->belongsTo(Concert::class, 'concert_name');
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'ticket_service', 'ticket_number', 'service_name');
    }
}
