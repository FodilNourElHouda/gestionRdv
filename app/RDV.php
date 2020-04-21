<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RDV extends Model
{
    protected $fillable = array('object','date','time' );
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
