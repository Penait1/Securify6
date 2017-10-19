<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Participant extends Authenticatable
{
    protected $fillable = [
        'email',
    ];


    /**
     * Retrieve a user by their email address.
     *
     * @param  string $email
     * @return $this
     */
    public static function byEmail($email)
    {
        return static::where('email', $email)->firstOrFail();
    }
}
