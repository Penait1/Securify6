<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    //


    protected $fillable=['comment','line_number'];

    public function challenge(){

        return $this->belongsTo(Challenge::class)->withTrashed();
    }

    public function participant(){

        return $this->belongsTo(Participant::class);
    }

}
