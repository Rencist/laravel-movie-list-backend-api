<?php

namespace App\Core\Application\Service\CreateMovie;

use App\Core\Domain\Models\Movie\Movie;
use App\Core\Domain\Repository\MovieRepositoryInterface;
use Exception;

class CreateMovieService
{
    private MovieRepositoryInterface $movie_repository;

    /**
     * @param MovieRepositoryInterface $movie_repository
     */
    public function __construct(MovieRepositoryInterface $movie_repository)
    {
        $this->movie_repository = $movie_repository;
    }

    /**
     * @throws Exception
     */
    public function execute(CreateMovieRequest $request)
    {
        $movie = Movie::create(
            $request->getPosterLink(),
            $request->getSeriesTitle(),
            $request->getReleasedYear(),
            $request->getRuntime(),
            $request->getGenre(),
            $request->getImdbRating(),
            $request->getOverview(),
            $request->getDirector(),
            $request->getStar1(),
            $request->getStar2(),
            $request->getStar3(),
        );
        $this->movie_repository->persist($movie);
    }
}
