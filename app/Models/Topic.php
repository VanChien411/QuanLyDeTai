<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $table = 'topic';
    public function users(){
        return $this->belongsToMany(User::class,'user_topic','id_user','id_topic');

    }
    public function topic_types(){
        return $this->belongsTo(Topic_type::class);
    }
    public function topic_detail(){
        return $this->hasOne(Roles::class);
    }
    public function rank(){
        return $this->belongsTo(Rank::class);
    }
}
