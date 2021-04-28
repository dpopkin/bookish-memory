<?php

namespace Database\Seeders;

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
        $factory = \App\Models\Company::factory(30)->create();
        for($i = 0; $i < 10; $i++){
            $limit = random_int(1,5);
            $person = \App\Models\Person::factory()->create();
            $person->companies()->attach($factory->random($limit));
        }
    }
}
