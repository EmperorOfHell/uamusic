<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Education extends FilamentModel
{
    use HasFactory;

    protected $table = 'educations';

    protected $primaryKey = 'diploma_number';
    public function institution(): BelongsTo
    {
        return $this->belongsTo(EducationalInstitution::class, 'institution_name');
    }
    public function specialty(): BelongsTo
    {
        return $this->belongsTo(Specialty::class, 'specialty_number');
    }

}
