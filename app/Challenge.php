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
            ->select('line_number_from', 'line_number_to')
            ->orderBy('line_number_from')
            ->pluck( 'line_number_to', 'line_number_from')
            ->toArray();
    }

    public function programmingLanguage(){
        return $this->belongsTo(ProgrammingLanguage::class, 'language_id');
    }

    /**
     * Retrieve a challenge by their id.
     *
     * @param  int $id
     * @return $this
     */
    public static function byId($id)
    {
        return static::where('id', $id)->firstOrFail();
    }

    public function submissions(){

        return $this->hasMany(Submission::class);
    }

}
