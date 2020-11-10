<?php

use Illuminate\Database\Seeder;

class GigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Gig::class, 30)->create();
    }
}
