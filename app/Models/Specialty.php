<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends FilamentModel
{
    use HasFactory;

    protected $primaryKey = 'number';
}
