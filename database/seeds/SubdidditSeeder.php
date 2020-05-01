<?php

use Illuminate\Database\Seeder;

class SubdidditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Subdiddit::class)->create(['user_id'=>1,'name'=>'Jokes']);
        factory(App\Subdiddit::class)->create(['user_id'=>2,'name'=>'Dev'],);
        factory(App\Subdiddit::class)->create(['user_id'=>3,'name'=>'News']);
        factory(App\Subdiddit::class)->create(['user_id'=>4,'name'=>'Aquariums']);
        factory(App\Subdiddit::class)->create(['user_id'=>5,'name'=>'Guitar']);
    }
}
