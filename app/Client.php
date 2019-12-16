<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable=array(
        'user_id',
        'nom',
        'prenom',
        'adresse',
        'telephone'
    );
    public static $rules=array(
        'user_id'=>'required|bigInteger',
        'nom'=>'required',
        'prenom'=>'required',
        'adresse'=>'required',
        'telephone'=>'required'
    );
    public function clients()
    {
        return $this->hasMany('App/Compte');
    }
}
