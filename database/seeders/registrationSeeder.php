<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\registration;

class registrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('registrations')->insert([
                'user_id' => $faker->numberBetween(1, 50),
                'event_id' => $faker->numberBetween(1, 3),
                'name' => $faker->name(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
