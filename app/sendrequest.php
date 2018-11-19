<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sendrequest extends Model
{
    protected $fillable = [
        'from', 'to', 'requestdate',
    ];
}
