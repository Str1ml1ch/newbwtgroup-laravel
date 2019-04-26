<?php

namespace ParsPogoda;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Mod extends Model
{
   // use Notifiable;
    protected $table = 'Main';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function ret()
    {
        return $this->hasMany('ParsPogoda\User','ID','id');
    }
}
