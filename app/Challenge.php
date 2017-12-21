<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Challenge extends Model

{
    //
    use SoftDeletes;
    protected $fillable = ['name','description', 'content','starting_at','ending_at'];

    public function getLineNumbersByParticipant($participantId)
    {
        return self::submissions()->where('participant_id', '=', $participantId)
            ->select('line_number')
            ->orderBy('line_number')
            ->pluck('line_number')
            ->toArray();
    }

    public function programmingLanguage(){
        return $this->belongsTo(ProgrammingLanguage::class, 'language_id');
    }

    public function submissions(){

        return $this->hasMany(Submission::class);
    }

}
