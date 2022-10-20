<?php

namespace App\Core\Application\Service\RandomMovie;

use Exception;
use Illuminate\Support\Facades\DB;
use App\Core\Application\Service\RandomMovie\RandomMovieResponse;
use App\Core\Application\Service\RandomMovie\SingleRandomMovieResponse;

class RandomMovieService
{
    /**
     * @throws Exception
     */
    public function execute(): array
    {
        // dd($start_form);
        $query = DB::select(
            "
                select * from movie
                ORDER BY RAND()
                LIMIT 1
            "
        );
        $query_collection = collect($query);
        return ($query_collection
            ->map(function ($query) {
                return new RandomMovieResponse(
                    $query->id,
                    $query->poster_link,
                    $query->series_title,
                    $query->released_year,
                    $query->certificate,
                    $query->runtime,
                    $query->genre,
                    $query->imdb_rating,
                    $query->overview,
                    $query->meta_score,
                    $query->director,
                    $query->star1,
                    $query->star2,
                    $query->star3,
                    $query->star4,
                    $query->no_of_votes,
                    $query->gross,
                );
            })->values()->all());
        
    }
}
