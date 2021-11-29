<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    public $fillable = ['label'];

    public function user(){

        return $this->hasMany('App\Models\User');
    }

    public function categorie(){

        return $this->belongsTo('App\Models\Categorie');
    }

}
