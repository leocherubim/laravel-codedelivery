<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    protected $fillable = [
    	'category_id',
    	'user_deliveryman_id',
    	'total',
    	'status'
    ];

    public function items()
    {
    	return $this->hasMany(OrderItem::class);
    }

    public function delivaryman()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}