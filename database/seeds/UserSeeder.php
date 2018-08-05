<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create(
            [
                'name' => '自分',
                'email' => 'myAppTest@example.com',
            ]
        );

        factory(App\User::class, 9)->create();
    }
}
