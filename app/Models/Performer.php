<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Performer extends FilamentModel
{
    use HasFactory;


    protected $primaryKey = 'nickname';

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'group_name');
    }

    public function education(): BelongsTo
    {
        return $this->belongsTo(Education::class, 'education_number');
    }

}
