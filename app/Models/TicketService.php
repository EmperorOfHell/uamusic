<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketService extends FilamentModel
{
    use HasFactory;

    protected $table = 'ticket_service';
}
