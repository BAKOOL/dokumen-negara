<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\StationaryType;


class Product extends Model
{
    //
    public function StationaryType(){
        return $this->belongsTo(StationaryType::class);
    }

    protected $table = 'product';

    protected $fillable = [
        'name', 'stationaryType_Id', 'stock', 'price', 'description', 'image',
    ];
}
