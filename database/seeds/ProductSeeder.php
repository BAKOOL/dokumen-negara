<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('stationary')->insert([
            [
                'name'=>'Ruled Notebook Diary',
                'type_id'=>'4',
                'stock'=>'2050',
                'price'=>'38000',
                'description'=>'Ruled Notebook Diary Agenda Buku Catatan Bergaris Joyko NB-663',
                'image'=>'images/product/notebook1.jpg'
            ],
            [
                'name'=>'Deli Notebook B5 96',
                'type_id'=>'4',
                'stock'=>'12585',
                'price'=>'61900',
                'description'=>'Deli Notebook B5 96 Lembar dengan pinggiran plastik T1696',
                'image'=>'images/product/deli.jpg'
            ],
            [
                'name'=>'Deli Loose-Leaf Notebook',
                'type_id'=>'4',
                'stock'=>'2660',
                'price'=>'11500',
                'description'=>'Deli Loose-Leaf Buku Notebook spiral B5 60 lembar LB560',
                'image'=>'images/product/deli_loose.jpg'
            ],
            [
                'name'=>'EP2 Empa Notebook Journal',
                'type_id'=>'4',
                'stock'=>'157',
                'price'=>'49900',
                'description'=>'Cover notebook ini terbuat dari faux leather, walaupun cover terlihat lembut dan halus, namun sedikit bertekstur sehingga sangat nyaman dan tidak licin untuk di genggam.',
                'image'=>'images/product/ep_empa.png'
            ],
            [
                'name'=>'BUKU TULIS NOTEBOOK A5',
                'type_id'=>'4',
                'stock'=>'3617',
                'price'=>'25000',
                'description'=>'BUKU DIARY BUKU TULIS NOTEBOOK A5 NOTEBOOK BUKU A5 LUCU BUKU CATATAN',
                'image'=>'images/product/bukudiarynotebook.jpg'
            ],
            [
                'name'=>'Xiaomi Mi Pen Pulpen',
                'type_id'=>'1',
                'stock'=>'834',
                'price'=>'45000',
                'description'=>'Xiaomi Mi Pen Pulpen / Bolpen / Ballpoint Premium (Original)',
                'image'=>'images/product/xiaomipen.png'
            ],
            [
                'name'=>'Stylus Pen Universal Ori',
                'type_id'=>'1',
                'stock'=>'327',
                'price'=>'199000',
                'description'=>'Stylus Pen Universal Ori Apple Ipad Android Samsung Original',
                'image'=>'images/product/styluspen.jpg'
            ],
            [
                'name'=>'Baseus Stylus 2in1 Pen Universal',
                'type_id'=>'1',
                'stock'=>'158',
                'price'=>'99000',
                'description'=>'Baseus Stylus 2in1 Pen Universal iPhone iPad Tablet IOS Android',
                'image'=>'images/product/baseuspen.jpg'
            ],
            [
                'name'=>'Baseus Stylus 2in1 Pen Universal',
                'type_id'=>'1',
                'stock'=>'158',
                'price'=>'99000',
                'description'=>'Baseus Stylus 2in1 Pen Universal iPhone iPad Tablet IOS Android',
                'image'=>'images/product/styluspen.jpg'
            ],
            [
                'name'=>'Template Circle Ruler / Penggaris Lingkaran Maped',
                'type_id'=>'3',
                'stock'=>'1135',
                'price'=>'22000',
                'description'=>'Penggaris lingkaran / circle Maped',
                'image'=>'images/product/rulercircle.jpg'
            ],
            [
                'name'=>'Oxford Pocket School Dictionary.',
                'type_id'=>'5',
                'stock'=>'695',
                'price'=>'72000',
                'description'=>'editor. Fred Mc, Donald. this edition 2007.',
                'image'=>'images/product/dictionary.jpg'
            ]
        ]);

    }
}
