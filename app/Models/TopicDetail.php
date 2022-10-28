<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic_detail extends Model
{
    use HasFactory;
    protected $table = 'topic_detail';
    public function topic(){
        return $this->belongsTo(Topic::class);

    }
    public function works(){
        return $this->hasMany(Work::class);
    }
 
    
}
