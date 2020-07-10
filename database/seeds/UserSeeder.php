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
        DB::table('users')->insert([
            'name' => 'Ilia',
            'email' => 'repin@implantshop.ru',
            'password' => 'CfXZ6htaQCfXZ6Zq',
            'role_id' => 1
        ]);
    }
}
