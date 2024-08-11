<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataAssessment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function diagnosis(): BelongsTo
    {
        return $this->belongsTo(MasalahKeperawatan::class, 'masalah_keperawatan');
    }
}
