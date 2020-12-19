<?php

use Illuminate\Database\Seeder;
use App\Models\Country;
class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fake  = Faker\Factory::create();
        $limit = 5;
        $COuntries = new Country();
        for ($i = 0; $i < $limit; $i++){
            DB::table('countries')->insert([
                'name' => $fake->name,
                'status' => $COuntries->status=1,
            ]);
        }
    }
}
