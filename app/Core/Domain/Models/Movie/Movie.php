<?php

namespace App\Core\Domain\Models\Movie;

use App\Core\Domain\Models\Movie\MovieId;


class Movie
{
    private MovieId $id;
    private string $poster_link;
    private string $series_title;
    private ?string $released_year;
    private ?string $runtime;
    private ?string $genre;
    private ?string $imdb_rating;
    private string $overview;
    private ?string $director;
    private ?string $star1;
    private ?string $star2;
    private ?string $star3;

    public function __construct(MovieId $id, string $poster_link, string $series_title, ?string $released_year, ?string $runtime, ?string $genre, ?string $imdb_rating, string $overview, ?string $director, ?string $star1, ?string $star2, ?string $star3)
    {
        $this->id = $id;
        $this->poster_link = $poster_link;
        $this->series_title = $series_title;
        $this->released_year = $released_year;
        $this->runtime = $runtime;
        $this->genre = $genre;
        $this->imdb_rating = $imdb_rating;
        $this->overview = $overview;
        $this->director = $director;
        $this->star1 = $star1;
        $this->star2 = $star2;
        $this->star3 = $star3;
    }

    public static function create(string $poster_link, string $series_title, ?string $released_year, ?string $runtime, ?string $genre, ?string $imdb_rating, string $overview, ?string $director, ?string $star1, ?string $star2, ?string $star3): self
    {
        return new self(
            MovieId::generate(),
            $poster_link,
            $series_title,
            $released_year,
            $runtime,
            $genre,
            $imdb_rating,
            $overview,
            $director,
            $star1,
            $star2,
            $star3
        );
    }

    public function getId(): MovieId
    {
        return $this->id;
    }

    public function getPosterLink(): string
    {
        return $this->poster_link;
    }

    public function getSeriesTitle(): string
    {
        return $this->series_title;
    }

    public function getReleasedYear(): ?string
    {
        return $this->released_year;
    }

    public function getRuntime(): ?string
    {
        return $this->runtime;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function getImdbRating(): ?string
    {
        return $this->imdb_rating;
    }

    public function getOverview(): string
    {
        return $this->overview;
    }

    public function getDirector(): ?string
    {
        return $this->director;
    }

    public function getStar1(): ?string
    {
        return $this->star1;
    }

    public function getStar2(): ?string
    {
        return $this->star2;
    }

    public function getStar3(): ?string
    {
        return $this->star3;
    }


}