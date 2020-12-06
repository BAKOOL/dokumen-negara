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
        DB::table('product')->insert([
            [
                'name'=>'Ruled Notebook Diary',
                'stationary_type'=>'notebook',
                'stock'=>'2050',
                'price'=>'Rp.38000',
                'description'=>'Ruled Notebook Diary Agenda Buku Catatan Bergaris Joyko NB-663',
                'image'=>'images/product/notebook1.jpg'


            ],
//            [
//                'name'=>'Deli Notebook B5 96',
//                'stationary_type'=>'notebook',
//                'stock'=>'12585',
//                'price'=>'Rp.61900',
//                'description'=>'Deli Notebook B5 96 Lembar dengan pinggiran plastik T1696',
//                'image'=>'images/product/deli.jpg'
//            ],
//            [
//                'name'=>'Deli Loose-Leaf Notebook',
//                'stationary_type'=>'notebook',
//                'stock'=>'2660',
//                'price'=>'Rp.11500',
//                'description'=>'Deli Loose-Leaf Buku Notebook spiral B5 60 lembar LB560',
//                'image'=>'images/product/deli_loose.jpg'
//            ],
//            [
//                'name'=>'EP2 Empa Notebook Journal',
//                'stationary_type'=>'notebook',
//                'stock'=>'157',
//                'price'=>'Rp.49900',
//                'description'=>'Cover notebook ini terbuat dari faux leather, walaupun cover terlihat lembut dan halus, namun sedikit bertekstur sehingga sangat nyaman dan tidak licin untuk di genggam.',
//                'image'=>'images/product/ep_empa.jpg'
//            ],
//            [
//                'name'=>'BUKU TULIS NOTEBOOK A5',
//                'stationary_type'=>'notebook',
//                'stock'=>'3617',
//                'price'=>'Rp.25000',
//                'description'=>'BUKU DIARY BUKU TULIS NOTEBOOK A5 NOTEBOOK BUKU A5 LUCU BUKU CATATAN',
//                'image'=>'images/product/bukudiarynotebook.jpg'
//            ],
//            [
//                'name'=>'Xiaomi Mi Pen Pulpen',
//                'stationary_type'=>'pen',
//                'stock'=>'834',
//                'price'=>'Rp.45000',
//                'description'=>'Xiaomi Mi Pen Pulpen / Bolpen / Ballpoint Premium (Original)',
//                'image'=>'images/product/xiaomipen.jpg'
//            ],
//            [
//                'name'=>'Stylus Pen Universal Ori',
//                'stationary_type'=>'pen',
//                'stock'=>'327',
//                'price'=>'Rp.199000',
//                'description'=>'Stylus Pen Universal Ori Apple Ipad Android Samsung Original',
//                'image'=>'images/product/styluspen.jpg'
//            ],
//            [
//                'name'=>'Baseus Stylus 2in1 Pen Universal',
//                'stationary_type'=>'pen',
//                'stock'=>'158',
//                'price'=>'Rp.99000',
//                'description'=>'Baseus Stylus 2in1 Pen Universal iPhone iPad Tablet IOS Android',
//                'image'=>'images/product/baseuspen.jpg'
//            ],
//            [
//                'name'=>'Baseus Stylus 2in1 Pen Universal',
//                'stationary_type'=>'pen',
//                'stock'=>'158',
//                'price'=>'Rp.99000',
//                'description'=>'Baseus Stylus 2in1 Pen Universal iPhone iPad Tablet IOS Android',
//                'image'=>''
//            ],
        ]);

    }
}
