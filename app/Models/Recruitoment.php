<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitoment extends Model
{
    use HasFactory;

    public function recruits()
    {
        return $this->hasMany(\App\Models\Recruit::class);
    }
}
