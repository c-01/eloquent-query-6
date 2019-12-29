<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductLine extends Model
{
    protected $table = 'productlines';

    public function products()
    {
        return $this->hasMany(Product::class, 'productLine', 'productLine');
    }

    public function productList()
    {
        return $this->hasMany(Product::class, 'productLine', 'productLine')
            ->select(['productCode','productLine','productName', 'quantityInStock'])
            ->orderBy('quantityInStock', 'desc')
            ->where('productCode', '=', 'S32_2206')
            #->limit(2)
        ;
    }
}
