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
        factory(\App\user::class, 50)->create();
        factory(\App\task::class, 20)->create();
        factory(\App\enterprise::class, 20)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
