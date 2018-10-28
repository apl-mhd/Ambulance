<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AmbulanceInfo extends Model
{
    protected $fillable = [
        'user_id',
        'drivername','ownername','drivermobile', 'ownermobile', 'drivernid','ambulancename',
        'email',  'location','hospital','acstatus','numberplate','type',
    ];
}
