<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    public $fillable = ['patient_id'];

    public function user(){
        return $this->hasOne('App\Models\User');
    }
}
