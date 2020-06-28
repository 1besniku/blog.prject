<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurvayResponses extends Model
{
    //
    protected $guarded =[];

    public function survay(){
        return $this->belongsTo(Survay::class);
    }
}
