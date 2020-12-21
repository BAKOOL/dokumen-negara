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
        DB::table('stationarytype')->insert([
            [
                'type_name' => 'pen',
                'type_image' => 'images/type/pen.png'
            ],
            [
                'type_name' => 'pencil',
                'type_image' => 'images/type/pencil-03.jpg'
            ],
            [
                'type_name' => 'ruler',
                'type_image' => 'images/type/rol.png'
            ],
            [
                'type_name' => 'notebook',
                'type_image' => 'images/type/notebook.png'
            ],
            [
                'type_name' => 'dictionary',
                'type_image' => 'images/type/dict.png'
            ],
            [
                'type_name' => 'smart pen',
                'type_image' => 'images/type/smart pen.jpg'
            ],
            [
                'type_name' => 'smart pencil',
                'type_image' => 'images/type/smart pencil.jpg'
            ],
            [
                'type_name' => 'smart reader',
                'type_image' => 'images/type/smart reader.jpg'
            ],
            [
                'type_name' => 'smart note',
                'type_image' => 'images/type/smart note.png'
            ],
            [
                'type_name' => 'eraser',
                'type_image' => 'images/type/eraser.jpg']
        ]);
    }
}
