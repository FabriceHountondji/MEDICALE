<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BonExamen extends Model
{
    public $fillable = ['label','date','patient_id'];

    public function user(){
        return $this->belongsTo('App\Models\User')->withPivot('patient_id');
    }
}
