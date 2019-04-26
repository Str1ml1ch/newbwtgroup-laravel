<?php

namespace ParsPogoda;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'User';
    protected $primaryKey = 'ID';
    public $timestamps = true;
    public $incrementing = false;
    protected $hidden =
        [
          'Password',
          'remember_token'
        ];
    public function Setdate($date)
    {
        $this->created_at = Carbon::createFromFormat('Y-m-d',$date);
    }
    public function userlen()
    {
         return $this->belongsTo('ParsPogoda\Mod');
    }
}
