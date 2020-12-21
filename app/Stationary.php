<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stationary extends Model
{
    //
    public function stationarytype(){
        return $this->belongsTo('App\StationaryType');
    }

    public $table = 'stationary';

    protected $fillable = [
        'name', 'type_id', 'stock', 'price', 'description', 'image',
    ];
}
