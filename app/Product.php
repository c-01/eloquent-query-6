<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function OrderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'productCode', 'productCode');
    }

    public function orderOfEachProduct()
    {
        return $this->hasMany(OrderDetail::class, 'productCode', 'productCode')
            ->orderBy('quantityOrdered', 'desc')
            ->where('orderLineNumber', '=', '1')
        ;
    }
}
