<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FilamentModel extends Model
{
    public $timestamps = false;
    public $usesUniqueIds = false;
    public $incrementing = false;
    protected $keyType = 'string';
}
