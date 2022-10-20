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

}
