<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class,19)->create(['subdiddit_id'=>1]);
        factory(App\Post::class,19)->create(['subdiddit_id'=>2]);
        factory(App\Post::class,19)->create(['subdiddit_id'=>3]);
        factory(App\Post::class,19)->create(['subdiddit_id'=>4]);
        factory(App\Post::class,19)->create(['subdiddit_id'=>5]);
        factory(App\Post::class,19)->create(['subdiddit_id'=>5,'user_id'=>1]);
    }
}
