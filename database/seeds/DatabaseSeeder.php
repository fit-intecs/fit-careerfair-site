<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 260)->create()->each(function($u) {
            $u->profile()->save(factory(App\Profile::class)->make());
        });
    }
}
