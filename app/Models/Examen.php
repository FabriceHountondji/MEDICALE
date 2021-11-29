<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    public $fillable = ['label','resultat','observations','patient_id'];

    public function user(){

        return $this->belongsTo('App\Models\User');

    }
}
