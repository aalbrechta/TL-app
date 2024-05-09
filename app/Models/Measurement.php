<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    use HasFactory;

    protected $table = ['lake', 'description', 'temperature'];

    public function getCreatedAtAttribute($value){
        return date('j M Y, G:i',  strtotime($value));
    }
}
