<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    use HasFactory;
    public $timestamps = false;


    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function gameplays()
    {
        return $this->hasMany(Gameplay::class);
    }
    public function players()
    {
        return $this->belongsToMany(User::class, 'version_user');
    }
}
