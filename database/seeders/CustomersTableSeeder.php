<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;


class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customers')->Insert([
            'name'        => 'customer1',
            'email'       => 'customer1@gmail.com',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at'  => date("Y-m-d H:i:s"),
       ]);

        DB::table('customers')->Insert([
            'name'        => 'customer2',
            'email'       => 'customer2@gmail.com',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at'  => date("Y-m-d H:i:s"),
       ]);

        DB::table('customers')->Insert([
            'name'        => 'customer3',
            'email'       => 'customer3@gmail.com',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at'  => date("Y-m-d H:i:s"),
       ]);
        DB::table('customers')->Insert([
            'name'        => 'customer4',
            'email'       => 'customer4@gmail.com',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at'  => date("Y-m-d H:i:s"),
       ]);
        DB::table('customers')->Insert([
            'name'        => 'customer5',
            'email'       => 'customer5@gmail.com',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at'  => date("Y-m-d H:i:s"),
       ]);
        DB::table('customers')->Insert([
            'name'        => 'customer6',
            'email'       => 'customer6@gmail.com',
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at'  => date("Y-m-d H:i:s"),
       ]);
    }
}
