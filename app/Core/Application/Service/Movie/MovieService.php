<?php

namespace App\Core\Application\Service\Movie;

use Exception;
use Illuminate\Support\Facades\DB;
use App\Core\Application\Service\Movie\MovieRequest;
use App\Core\Application\Service\PaginationResponse;
use App\Core\Application\Service\Movie\MovieResponse;

class MovieService
{
    /**
     * @throws Exception
     */
    public function execute(MovieRequest $request): PaginationResponse
    {
        // dd($start_form);
        $query = DB::select(
            "
            select
                *
            from movie
            order by id desc
            "
        );
        $query_collection = collect($query);
        $data_per_page = $query_collection
            ->forPage($request->getPage(), $request->getPerPage())
            ->map(function ($query) {
                return new MovieResponse(
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
            })->values()->all();
            
        return new PaginationResponse(
            $data_per_page,
            $request->getPage(),
            ceil($query_collection->count() / $request->getPerPage())
        );
    }
}
