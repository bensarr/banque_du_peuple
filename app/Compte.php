<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable=array(
        'client_id',
        'user_id',
        'numero',
        'solde'
    );
    public static $rules=array(
        'client_id'=>'required|bigInteger',
        'user_id'=>'required|bigInteger',
        'numero'=>'required',
        'solde'=>'required|numeric'
    );
    public function comptes()
    {
        return $this->belongsTO('App/Client');
    }
}
