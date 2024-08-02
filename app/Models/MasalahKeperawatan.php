<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MasalahKeperawatan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriMasalahKeperawatan::class, 'kategori_masalah_keperawatan_id');
    }
}
