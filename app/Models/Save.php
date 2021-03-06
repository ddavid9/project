<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    use HasFactory;
    public function path()
    {
        return route('show', $this);
    }

    public function owner()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
