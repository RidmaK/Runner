<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Runner extends Model
{
    use HasFactory;
    protected $table = "runners";

    public function race()
    {
        return $this->belongsTo(Race::class);
    }
    public function lastRuns()
    {
        return $this->hasMany(FormLastRunr::class);
    }
}
