<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Assessment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function karu(): BelongsTo
    {
        return $this->belongsTo(User::class, 'karu_id');
    }
    public function katim(): BelongsTo
    {
        return $this->belongsTo(User::class, 'katim_id');
    }
}
