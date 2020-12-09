<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name'=>'Admin', 'email'=>'admin@readandwarite.com', 'is_admin'=>'1', 'password'=> bcrypt('password'),
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }

        $this->call(TypeSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
