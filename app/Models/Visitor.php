<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'instance',
        'phone_number',
        'meet_id',
        'utility_id',
        'desc',
        'date'
    ];

    public function meet(){
        return $this->hasOne(Meet::class, 'id' , 'meet_id');
    }

    public function utility(){
        return $this->hasOne(Utility::class, 'id' , 'utility_id');
    }
}
