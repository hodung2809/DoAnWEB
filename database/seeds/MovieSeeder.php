<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class MovieSeeder extends Seeder
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
        $Movies = new Movie();
        for ($i = 0; $i < $limit; $i++){
            DB::table('movies')->insert([
                'name' => $fake->name,
                'movie_id' => $Movies->movie_id,
                'country_id' => $Movies->country_id,
                'director' => $fake->name,
                'length' => $fake->time,
                'opening_day' => $fake->date("Y-m-d"),
                'trailer' => $fake->name,
                'price' => $fake->name,
                'status' => $Movies->status=1,
            ]);
        }
    }
}
