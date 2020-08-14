<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable = array('numero','clesRib','solde','idClient');
    public static $rules = array('numero'=>'max:20','clesRib'=>'max:10','solde'=>'integer','idClient'=>'irequired|integer');

    public  function client(){
        return $this->belongsTo('App\Client');
    }
}
