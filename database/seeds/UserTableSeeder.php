<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name'=>'emerson',
            'username'=> 'egonzalez',
            'email'=>'emersongonzal86@gmail.com',
            'role'=>'admin',
            'password'=> bcrypt('emer1215'),
            'active'=>true

        ]);
        factory(App\User::class,49)->create();
    }
}
