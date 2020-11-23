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
        factory(\App\task::class, 80)->create();
        factory(\App\enterprise::class, 5)->create();
        factory(\App\cycle::class, 3)->create();
        factory(\App\module::class, 10)->create();
        factory(\App\ra::class, 30)->create();
        factory(\App\ce::class, 60)->create();
        factory(\App\user::class, 30)->create();
        factory(\App\user::class)->create(['email'=>'admin@admin.com','password'=> bcrypt('123456'),'type'=>'admin']);
        factory(\App\tracing::class, 30)->create();
        factory(\App\study::class, 30)->create();
        factory(\App\task_done::class, 20)->create();
        factory(\App\assistance::class, 20)->create();
        factory(\App\worksheet::class, 40)->create();
        factory(\App\belong::class, 30)->create();
        factory(\App\visit::class, 30)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
