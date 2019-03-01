<?php

use Illuminate\Database\Seeder;
use DB;

class AdminUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_users')->insert([
            'name' => 'admin',
            'password' => bcrypt('admin'),
        ]);
    }
}
