<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruit extends Model
{
    use HasFactory;

    public function scopeSearch(Builder $query, $params)
    {
        if (!empty($params['recruitoment'])) {
            $query->whereHas('Recruitoment', function($q) use ($params){
                $q->where('name', 'like', '%' . $params['recruitoment'] . '%');
            });
        }
        if (!empty($params['workplace'])) {
            $query->where('workplace', 'like', '%' . $params['workplace'] . '%');
        }
        if (!empty($params['salary'])) {
            $query->where('salary', 'like', '%' . $params['salary'] . '%');
        }
        return $query;
    }
    public function recruitoment()
    {
        return $this->belongsTo(\App\Models\Recruitoment::class);
    }
}
