<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Core\Domain\Models\Movie\Movie;
use App\Core\Application\Service\Movie\MovieRequest;
use App\Core\Application\Service\Movie\MovieService;
use App\Core\Application\Service\DetailMovie\DetailMovieRequest;
use App\Core\Application\Service\DetailMovie\DetailMovieService;
use App\Core\Application\Service\RandomMovie\RandomMovieService;

class MovieController extends Controller
{
    /**
     * @throws Exception
     */
    public function movies(Request $request, MovieService $service): JsonResponse
    {
        $input = new MovieRequest($request->input('page'), $request->input('per_page'));
        return $this->successWithData(
            $service->execute($input)
        );
    }

    /**
     * @throws Exception
     */
    public function detailMovie(Request $request, DetailMovieService $service): JsonResponse
    {
        $input = new DetailMovieRequest($request->input('id'));
        return $this->successWithData(
            $service->execute($input)
        );
    }

    /**
     * @throws Exception
     */
    public function randomMovie(RandomMovieService $service): JsonResponse
    {
        return $this->successWithData(
            $service->execute()
        );
    }

    /**
     * @throws Exception
     */
    public function createMovies(Request $request, CreateMovieService $service): JsonResponse
    {
        $input = new CreateMovieRequest(
            $request->input('poster_link'),
            $request->input('series_title'),
            $request->input('released_year'),
            $request->input('runtime'),
            $request->input('genre'),
            $request->input('imdb_rating'),
            $request->input('overview'),
            $request->input('director'),
            $request->input('star1'),
            $request->input('star2'),
            $request->input('star3'),
        );
        return $this->successWithData(
            $service->execute($input)
        );
    }

}
