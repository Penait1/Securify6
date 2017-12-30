<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Challenge extends Model

{
    //
    use SoftDeletes;
    protected $fillable = ['name','content','starting_at','ending_at'];

    public function programmingLanguage(){
        return $this->hasOne(ProgrammingLanguage::class);
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
