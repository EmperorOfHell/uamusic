<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends FilamentModel
{
    use HasFactory;

    protected $primaryKey = 'name';

    public function tickets()
    {
        return $this->belongsToMany(Ticket::class, 'ticket_service', 'service_name', 'ticket_number');
    }
}
