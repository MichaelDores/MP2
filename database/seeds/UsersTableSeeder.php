<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Users::class, 50)->create()->each(function ($u) {
           $u->cars()->save(factory(App\Cars::class)->make());
        });
    }
}
