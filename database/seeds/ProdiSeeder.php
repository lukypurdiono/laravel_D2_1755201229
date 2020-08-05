<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 5; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('prodi')->insert([
    			'kode_prodi' => $faker->numberBetween(300,400),
    			'nama_prodi' => $faker->jobTitle,
    			'kaprodi' => $faker->name    			
    		]);
 
    	}
    }
}
