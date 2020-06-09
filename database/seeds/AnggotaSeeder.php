<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 50; $i++){
            DB::table('anggota')->insert([
                'nama' => $faker->name,
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),            
                'id_ketua' => $faker->numberBetween(1,10)
            ]);
        }
    }
}
