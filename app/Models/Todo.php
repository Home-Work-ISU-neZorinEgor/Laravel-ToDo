<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Todo extends Model
{
    protected $fillable = ['title', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}