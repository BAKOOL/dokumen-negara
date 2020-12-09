<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('type')->insert([
            ['stationaryType_Name' => 'pen'],
            ['stationaryType_Name' => 'pencil'],
            ['stationaryType_Name' => 'ruler'],
            ['stationaryType_Name' => 'notebook'],
            ['stationaryType_Name' => 'dictionary'],
            ['stationaryType_Name' => 'smart pen'],
            ['stationaryType_Name' => 'smart pencil'],
            ['stationaryType_Name' => 'smart reader'],
            ['stationaryType_Name' => 'smart note'],
            ['stationaryType_Name' => 'eraser']
        ]);
    }
}
