<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FicheSoin extends Model
{
    public $fillable = ['date','temperature','poids','details','patient_id'];

    public function user(){

        return $this->belongsTo('App\Models\User')->withPivot('patient_id');

    }

}
