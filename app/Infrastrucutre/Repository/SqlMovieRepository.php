<?php

namespace App\Infrastrucutre\Repository;

use Exception;
use Illuminate\Support\Facades\DB;
use App\Core\Domain\Models\Movie\Movie;
use App\Core\Domain\Models\Movie\MovieId;
use App\Core\Domain\Repository\MovieRepositoryInterface;

class SqlMovieRepository implements MovieRepositoryInterface
{
    public function persist(Movie $movie): void
    {
        DB::table('movie')->upsert([
            'id' => $movie->getId()->toString(),
            'poster_link' => $movie->getPosterLink(),
            'series_title' => $movie->getSeriesTitle(),
            'released_year' => $movie->getReleasedYear(),
            'runtime' => $movie->getRuntime(),
            'genre' => $movie->getGenre(),
            'imdb_rating' => $movie->getImdbRating(),
            'overview' => $movie->getOverview(),
            'director' => $movie->getDirector(),
            'star1' => $movie->getStar1(),
            'star2' => $movie->getStar2(),
            'star3' => $movie->getStar3()
        ], 'id');
    }

    /**
     * @throws Exception
     */
    public function find(MovieId $id): ?Movie
    {
        $row = DB::table('movie')->where('id', $id->toString())->first();

        if (!$row) return null;

        return $this->constructFromRow($row);
    }
    
    /**
     * @throws Exception
     */
    private function constructFromRow($row): Movie
    {
        return new Movie(
            new MovieId($row->id),
            $row->poster_link,
            $row->series_title,
            $row->released_year,
            $row->runtime,
            $row->genre,
            $row->imdb_rating,
            $row->overview,
            $row->director,
            $row->star1,
            $row->star2,
            $row->star3
        );
    }
}
