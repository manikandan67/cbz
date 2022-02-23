<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admin_users')->Insert([
            'name'        => 'admin1',
            'email'       => 'admin1@gmail.com',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at'  => date("Y-m-d H:i:s"),
       ]);
        DB::table('admin_users')->Insert([
            'name'        => 'admin2',
            'email'       => 'admin2@gmail.com',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at'  => date("Y-m-d H:i:s"),
       ]);
        DB::table('admin_users')->Insert([
            'name'        => 'admin3',
            'email'       => 'admin3@gmail.com',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at'  => date("Y-m-d H:i:s"),
       ]);
        DB::table('admin_users')->Insert([
            'name'        => 'admin4',
            'email'       => 'admin4@gmail.com',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at'  => date("Y-m-d H:i:s"),
       ]);
    }
}
