<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
//    protected $table = 'projects';

    public function users(): HasMany
    {
        return $this->hasMany(User::class,'asda','asd');
    }
}
