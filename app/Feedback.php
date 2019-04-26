<?php

namespace ParsPogoda;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Feedback extends Model
{
    use Notifiable;
    protected $table = 'Feedback';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = false;
    public function Setdate($date)
    {
        $this->created_at = Carbon::createFromFormat('Y-m-d',$date);
    }
}
