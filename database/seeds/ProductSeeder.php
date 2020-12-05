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
                'price'=>'Rp.38000',
                'stationary_type'=>'notebook',
                'stock'=>'2050',
                'description'=>'Ruled Notebook Diary Agenda Buku Catatan Bergaris Joyko NB-663',
                'image'=>''


            ],
            [
                'name'=>'Deli Notebook B5 96',
                'price'=>'Rp.61900',
                'stationary_type'=>'notebook',
                'stock'=>'12585',
                'description'=>'Deli Notebook B5 96 Lembar dengan pinggiran plastik T1696',
                'image'=>''
            ],
            [
                'name'=>'Deli Loose-Leaf Notebook',
                'price'=>'Rp.11500',
                'stationary_type'=>'notebook',
                'stock'=>'2660',
                'description'=>'Deli Loose-Leaf Buku Notebook spiral B5 60 lembar LB560',
                'image'=>''
            ],
            [
                'name'=>'EP2 Empa Notebook Journal',
                'price'=>'Rp.49900',
                'stationary_type'=>'notebook',
                'stock'=>'157',
                'description'=>'Cover notebook ini terbuat dari faux leather, walaupun cover terlihat lembut dan halus, namun sedikit bertekstur sehingga sangat nyaman dan tidak licin untuk di genggam.',
                'image'=>''
            ],
            [
                'name'=>'BUKU TULIS NOTEBOOK A5',
                'price'=>'Rp.25000',
                'stationary_type'=>'notebook',
                'stock'=>'3617',
                'description'=>'BUKU DIARY BUKU TULIS NOTEBOOK A5 NOTEBOOK BUKU A5 LUCU BUKU CATATAN',
                'image'=>''
            ],
            [
                'name'=>'Xiaomi Mi Pen Pulpen',
                'price'=>'Rp.45000',
                'stationary_type'=>'pen',
                'stock'=>'834',
                'description'=>'Xiaomi Mi Pen Pulpen / Bolpen / Ballpoint Premium (Original)',
                'image'=>''
            ],
            [
                'name'=>'Stylus Pen Universal Ori',
                'price'=>'Rp.199000',
                'stationary_type'=>'pen',
                'stock'=>'327',
                'description'=>'Stylus Pen Universal Ori Apple Ipad Android Samsung Original',
                'image'=>''
            ],
            [
                'name'=>'Baseus Stylus 2in1 Pen Universal',
                'price'=>'Rp.99000',
                'stationary_type'=>'pen',
                'stock'=>'158',
                'description'=>'Baseus Stylus 2in1 Pen Universal iPhone iPad Tablet IOS Android',
                'image'=>''
            ],
            [
                'name'=>'Baseus Stylus 2in1 Pen Universal',
                'price'=>'Rp.99000',
                'stationary_type'=>'pen',
                'stock'=>'158',
                'description'=>'Baseus Stylus 2in1 Pen Universal iPhone iPad Tablet IOS Android',
                'image'=>''
            ],
        ]);

    }
}
