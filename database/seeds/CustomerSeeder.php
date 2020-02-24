<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = Faker::create('id_ID'); // kode negara
 
    	for($i = 1; $i <= 200; $i++){
 
    	      // insert data ke table customer menggunakan Faker
    		DB::table('customer')->insert([
    			'nama' => $faker->name,
    			'alamat' => $faker->address,
    			'umur' => $faker->numberBetween(25,40)
    			
    		]);
 
    	}
    }
}
