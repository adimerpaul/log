<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Inertia\Inertia;

class Log extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
//        return Inertia::render('logs', ['data' => $data]);
    }
}
