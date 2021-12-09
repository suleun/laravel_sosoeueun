<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HobbyPost extends Model
{
    use HasFactory;

    protected $fillable = ['to_hobbies_id', 'image', 'comment'];
 
    public function to_hobby()
    {
        return $this->belongsTo(ToHobby::class, "to_hobbies_id", "id");
    }
}

