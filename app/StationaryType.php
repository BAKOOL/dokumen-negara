<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class StationaryType extends Model
{
    //
    public function Product(){
        return $this->hasMany(Product::class, 'stationaryType_Id');
    }
    public $table = 'stationaryType';

}
