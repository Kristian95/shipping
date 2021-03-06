<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sender extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'senders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
    ];
}
