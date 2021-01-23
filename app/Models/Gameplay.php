<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gameplay extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function version()
    {
        return $this->belongsTo(Version::class);
    }

    public function players()
    {
        return $this->belongsToMany(User::class,'gameplay_players')->withPivot('role');
    }
}
