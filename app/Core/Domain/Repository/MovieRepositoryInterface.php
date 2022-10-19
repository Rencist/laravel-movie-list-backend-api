<?php

namespace App\Core\Domain\Repository;

use App\Core\Domain\Models\Movie\Movie;

interface MovieRepositoryInterface
{
    public function persist(Movie $movie): void;

    public function find(string $id): ?Movie;
}
