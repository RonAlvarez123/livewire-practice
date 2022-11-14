<?php

namespace Database\Seeders;

use App\Models\Continent;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultContinents = Continent::getContinents();

        foreach ($defaultContinents as $defaultContinent) {
            $continent = Continent::create([
                'name' => $defaultContinent['name'],
            ]);

            foreach ($defaultContinent['countries'] as $country) {
                Country::create([
                    'continent_id' => $continent['id'],
                    'name' => $country,
                ]);
            }
        }
    }
}
