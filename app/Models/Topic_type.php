<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic_type extends Model
{
    use HasFactory;
    protected $table = 'topic_type';
    public function topics(){
        return $this->hasMany(Roles::class);
    }
}
