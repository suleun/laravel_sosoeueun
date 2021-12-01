<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoM extends Model
{
    use HasFactory;

    protected $fillable = ['today', 'content'];
}
