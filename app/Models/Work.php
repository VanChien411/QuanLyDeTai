<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $table = 'work';
   
    public function topic_detail(){
        return $this->belongsTo(Topic_detail::class);
    }
}
