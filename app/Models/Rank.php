<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    use HasFactory;
    protected $table = 'rank';
    protected $fillable = [
        'name',
        'StartDate',
        'EndDate',
        'id_type'
    ];
    public function topics()
    {
        return $this->hasMany(Topic::class);
    }
}
