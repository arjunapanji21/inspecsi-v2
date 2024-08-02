<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriMasalahKeperawatan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function item(): HasMany
    {
        return $this->hasMany(MasalahKeperawatan::class);
    }
}
