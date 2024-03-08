<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    protected $casts = [
        'results' => 'json',
        'config' => 'json',
    ];

    public function user () {
        return $this->belongsto(User::class);
    }

    public function project () {
        return $this->belongsto(Project::class);
    }
    
}


