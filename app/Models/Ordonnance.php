<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordonnance extends Model
{
    public $fillable = ['prescriptions','observations','patient_id'];

    public function user(){

        return $this->belongsTo('App\Models\User')->withPivot('patient_id');

    }
}
