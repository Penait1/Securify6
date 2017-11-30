<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgrammingLanguage extends Model
{
    //Security dingetjes
    protected $fillable=['name'];

    public function challenges(){
        return $this->hasMany(Challenge::class);
    }
}
