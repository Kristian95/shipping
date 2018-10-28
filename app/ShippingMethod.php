<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingMethod extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'shipping_methods';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
    ];

    /**
     * Get the senders for the shipping method.
     */
    public function senders()
    {
        return $this->belongsToMany('App\Sender');
    }

    /**
     * Get the recipients for the shipping method.
     */
    public function recipients()
    {
        return $this->belongsToMany('App\Recipient');
    }
}
