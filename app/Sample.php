<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Sample extends Model
{
    protected $fillable = [
        'name',
        'title',
        'content',
    ];

    public function scopeSearch($query ,$keyword)
    {
        return $query->where('name', 'like', '%' . $keyword . '%')
                    ->orWhere('title', 'like', '%' . $keyword . '%')
                    ->orWhere('content', 'like', '%'. $keyword . '%')
                    ->get();
    }
}
