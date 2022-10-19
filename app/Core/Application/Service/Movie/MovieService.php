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
            select id, poster_link, series_title, overview
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
                    $query->overview,
                );
            })->values()->all();
            
        return new PaginationResponse(
            $data_per_page,
            $request->getPage(),
            ceil($query_collection->count() / $request->getPerPage())
        );
    }
}
