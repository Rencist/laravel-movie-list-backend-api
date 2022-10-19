<?php

namespace App\Core\Application\Service\DetailMovie;

class DetailMovieRequest
{
    private string $movie_id;

    /**
     * @param string $movie_id
     */
    public function __construct(string $movie_id)
    {
        $this->movie_id = $movie_id;
    }

    /**
     * @return string
     */
    public function getMovieId(): string
    {
        return $this->movie_id;
    }

}
