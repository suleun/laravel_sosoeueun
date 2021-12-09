<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ToHobby extends Model
{
    use HasFactory;

    protected $fillable = ['today', 'content'];
    

    public function hobby_posts()
    {
        return $this->hasMany(HobbyPost::class);
    }
}
