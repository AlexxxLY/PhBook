<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone_contact extends Model
{
    //
    protected $fillable = [
        'name', 'number', 'notes','user_id',
    ];
}
