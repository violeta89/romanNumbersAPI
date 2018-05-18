<?php

use Illuminate\Database\Seeder;

class NumberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Number::class, 10)->create();
    }
}
