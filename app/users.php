<?php

namespace ParsPogoda;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = "User";
    protected $primaryKey = "ID";
    public $timestamps = true;
    protected $connection = 'mysql';
}
