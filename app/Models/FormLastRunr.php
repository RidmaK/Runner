<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormLastRunr extends Model
{
    use HasFactory;

    public function runner()
    {
        return $this->belongsTo(Runner::class);
    }
}
