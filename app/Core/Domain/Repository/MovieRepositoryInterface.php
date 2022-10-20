<?php

namespace App\Core\Domain\Repository;

use App\Core\Domain\Models\Movie\Movie;
use App\Core\Domain\Models\Movie\MovieId;

interface MovieRepositoryInterface
{
    public function persist(Movie $movie): void;

    public function find(MovieId $id): ?Movie;
}
