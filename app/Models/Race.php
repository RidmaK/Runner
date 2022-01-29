<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;
    protected $table = "races";

    public function meeting()
    {
        return $this->belongsTo(Meeting::class);
    }
    public function runner()
    {
        return $this->hasMany(Runner::class);
    }
}
