<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = array('nom','prenom','telephone','adresse');
    public static $rules = array('nom'=>'max:30','prenom'=>'max:50','telephone'=>'max:15','adresse'=>'max:75');
    public  function clients(){
        return $this->hasMany('App\Compte');
    }
}
