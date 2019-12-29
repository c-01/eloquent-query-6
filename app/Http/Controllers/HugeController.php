<?php

namespace App\Http\Controllers;

use App\ProductLine;
use Illuminate\Http\Request;

class HugeController extends Controller
{

    public function index($line)
    {
        $hasMany = ProductLine::where('productLine',$line)
            ->with('productList')
            ->with('productList.orderOfEachProduct')
            ->first();
        #return $hasMany;
        return abort(404);
    }
}
