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

}
