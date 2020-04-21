<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $name;
    protected $firstName;
    protected $adresse;
    protected $mail;
    protected $number;

  
    public function rdvs()
    {
        return $this->hasMany(RDV::class);
    }
}
