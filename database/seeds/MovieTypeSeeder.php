<?php

use Illuminate\Database\Seeder;
use App\Models\MovieType;

class MovieTypeSeeder extends Seeder
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
        $limit = 10;
        $MovieTypes = new MovieType();
        for ($i = 0; $i < $limit; $i++){
            DB::table('movie_types')->insert([
                'name' => $fake->name,
                'status' => $MovieTypes->status=1,
            ]);
        }
    }
}
