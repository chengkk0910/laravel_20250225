<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hobby extends Model
{
    public function studentRelation(): BelongsTo
    {
        return $this->belongsTo(Hobby::class);
    }
}
