<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends FilamentModel
{
    use HasFactory;
    protected $primaryKey = 'name';
}
