<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingPrice extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'shipping_prices';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'shipping_method_id', 'price', 'weight_from', 'weight_to'
    ];

    /**
     * Get the shipping method for the shipping pricent.
     */
    public function shipping_method()
    {
        return $this->belongsTo(ShippingMethod::class);
    }
}
