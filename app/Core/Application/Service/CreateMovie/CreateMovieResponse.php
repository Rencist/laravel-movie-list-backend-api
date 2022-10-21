<?php

namespace App\Core\Application\Service\CreateMovie;

use JsonSerializable;

class CreateMovieResponse implements JsonSerializable
{
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

    public function __construct(string $poster_link, string $series_title, ?string $released_year, ?string $runtime, ?string $genre, ?string $imdb_rating, string $overview, ?string $director, ?string $star1, ?string $star2, ?string $star3)
    {
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

    public function jsonSerialize(): array
    {
        return [
            "poster_link" => $this->poster_link,
            "series_title" => $this->series_title,
            "released_year" => $this->released_year,
            "runtime" => $this->runtime,
            "genre" => $this->genre,
            "imdb_rating" => $this->imdb_rating,
            "overview" => $this->overview,
            "director" => $this->director,
            "star1" => $this->star1,
            "star2" => $this->star2,
            "star3" => $this->star3
        ];
    }
}
