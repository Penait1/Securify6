<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    //


    protected $fillable=['comment','line_number_from','line_number_to'];

    public function challenge(){

        return $this->belongsTo(Challenge::class)->withTrashed();
    }

    public function participant(){

        return $this->belongsTo(Participant::class);
    }

    public function getFormattedLineNumbersAttribute()
    {
        if($this->line_number_from === $this->line_number_to) {
            return $this->line_number_from;
        } else {
            return $this->line_number_from . '-' . $this->line_number_to;
        }
    }

}
