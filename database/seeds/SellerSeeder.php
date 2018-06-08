<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sellers')->insert([
            'name' => 'Seller Seller',
            'email' => 'seller@gmail.com',
            'password' => bcrypt('seller123'),
        ]);
    }
}
