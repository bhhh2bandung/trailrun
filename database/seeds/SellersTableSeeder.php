<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sellers')->insert([
            'name' => 'agung senjaya',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password123'),
        ]);
        DB::table('sellers')->insert([
            'name' => 'rangga indrawan',
            'email' => 'rangga@gmail.com',
            'password' => bcrypt('password123'),
        ]);
    }
}
