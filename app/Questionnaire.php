<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Questionnaire extends Model
{
    protected $guarded =[];

    public function path(){
        return  url('/questionnaire/'.$this->id);
    }
    public function publicpath(){
        return url('/surveys/'.$this->id.'-'.Str::slug($this->title));
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function question(){
        return $this->hasMany(Question::class);
    }
    public function survays(){
        return $this->hasMany(Survay::class);
    }
}
