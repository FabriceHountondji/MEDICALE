<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $fillable = ['label'];

    public function users(){
        return $this->hasMany('App\Models\User');
    }
}
