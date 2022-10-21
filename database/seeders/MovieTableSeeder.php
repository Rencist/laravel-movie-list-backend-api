<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Core\Domain\Models\Movie\MovieId;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(database_path('seeders/json/imdb-movie.json'));
        $movies = json_decode($json, true);

        $payload = [];
        foreach ($movies as $movie) {
            $payload[] = [
                'id' => MovieId::generate()->toString(),
                'poster_link' => $movie['poster_link'],
                'series_title' => $movie['series_title'],
                'released_year' => $movie['released_year'],
                'runtime' => $movie['runtime'],
                'genre' => $movie['genre'],
                'imdb_rating' => $movie['imdb_rating'],
                'overview' => $movie['overview'],
                'director' => $movie['director'],
                'star1' => $movie['star1'],
                'star2' => $movie['star2'],
                'star3' => $movie['star3']
            ];
        }
        DB::table('movie')->insert($payload);
    }
}
