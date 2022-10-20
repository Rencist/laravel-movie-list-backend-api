<?php

namespace App\Core\Application\Service\DetailMovie;

use Exception;
use App\Core\Domain\Repository\MovieRepositoryInterface;
use App\Core\Application\Service\DetailMovie\DetailMovieRequest;
use App\Core\Application\Service\DetailMovie\DetailMovieResponse;
use App\Core\Domain\Models\Movie\MovieId;

class DetailMovieService
{
    private MovieRepositoryInterface $movie_repository;

    public function __construct(MovieRepositoryInterface $movie_repository)
    {
        $this->movie_repository = $movie_repository;
    }

    /**
     * @throws Exception
     */
    public function execute(DetailMovieRequest $request): DetailMovieResponse
    {
        $movies = $this->movie_repository->find(new MovieId($request->getMovieId()));
        return new DetailMovieResponse(
            $movies->getId()->toString(),
            $movies->getPosterLink(),
            $movies->getSeriesTitle(),
            $movies->getReleasedYear(),
            $movies->getRuntime(),
            $movies->getGenre(),
            $movies->getImdbRating(),
            $movies->getOverview(),
            $movies->getDirector(),
            $movies->getStar1(),
            $movies->getStar2(),
            $movies->getStar3()
        );
    }
}
