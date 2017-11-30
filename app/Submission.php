<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    //


    protected $fillable=['comment','line_number'];

    public function submission(){

        return $this->hasMany(Challenge::class);
    }

    public function participant(){

        return $this->belongsTo(Participant::class);
    }

}
