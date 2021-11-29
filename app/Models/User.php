<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $fillable = ['name','phone','birthday','sex','address','avatar','email','password','role_id'];

    public function ordonnances(){

        return $this->hasMany('App\Models\Ordonnance');
    }

    public function examens(){

        return $this->hasMany('App\Models\Examen');
    }

    public function services(){

        return $this->hasMany('App\Models\Service');
    }

    public function fichesSoin(){

        return $this->hasMany('App\Models\FicheSoin');
    }

    public function bonExamen(){
        return $this->hasMany('App\Models\BonExamen');
    }

    public function role(){

        return $this->belongsTo('App\Models\Role');
    }

    public function chambre(){

        return $this->belongsTo('App\Models\Chambre');

    }

    public function dossier(){

        return $this->belongsTo('App\Models\Dossier');
    }

}
