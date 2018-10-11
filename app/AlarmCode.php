<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlarmCode extends Model
{
    protected $table = 'alarm_codes';
    protected $fillable = [
        'code','content'
    ];

}
