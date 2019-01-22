<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('roles')->insert([
            'name' => 'admin'
        ]);

        DB::table('roles')->insert([
            'name' => 'landlord'
        ]);

        DB::table('roles')->insert([
            'name' => 'tenant'
        ]);

        DB::table('roles')->insert([
            'name' => 'realtor'
        ]);


    }
}
