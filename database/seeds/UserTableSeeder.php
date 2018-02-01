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
        DB::table('users')->truncate();

        DB::table('users')->insert([
        	[
        		'name' => 'Cuong Vu',
        		'email' => 'cuongvu@gmail.com',
        		'password' => bcrypt('123456')
        	],
        	[
        		'name' => 'Ngo Quyen',
        		'email' => 'ngoquyen@gmail.com',
        		'password' => bcrypt('123456')
        	],
        	[
        		'name' => 'Tan Dung',
        		'email' => 'tandung@gmail.com',
        		'password' => bcrypt('123456')
        	]
        ]);
    }
}
