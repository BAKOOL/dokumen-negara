<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class StationaryType extends Model
{
    //
    public function stationary(){
        return $this->hasMany('App\Stationary');
    }
    public $table = 'stationarytype';

}
