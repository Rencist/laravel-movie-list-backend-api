<?php

namespace App\Core\Application\Service\DetailMovie;

use JsonSerializable;

class DetailMovieResponse implements JsonSerializable
{
    private string $id;
    private string $poster_link;
    private string $series_title;
    private ?string $released_year;
    private ?string $certificate;
    private ?string $runtime;
    private ?string $genre;
    private ?string $imdb_rating;
    private string $overview;
    private ?string $meta_score;
    private ?string $director;
    private ?string $star1;
    private ?string $star2;
    private ?string $star3;
    private ?string $star4;
    private ?string $no_of_votes;
    private ?string $gross;

    public function __construct(string $id, string $poster_link, string $series_title, 
    ?string $released_year, ?string $certificate, ?string $runtime, ?string $genre, ?string $imdb_rating, 
    string $overview, ?string $meta_score, ?string $director, ?string $star1, ?string $star2, 
    ?string $star3, ?string $star4, ?string $no_of_votes, ?string $gross)
    {
        $this->id = $id;
        $this->poster_link = $poster_link;
        $this->series_title = $series_title;
        $this->released_year = $released_year;
        $this->certificate = $certificate;
        $this->runtime = $runtime;
        $this->genre = $genre;
        $this->imdb_rating = $imdb_rating;
        $this->overview = $overview;
        $this->meta_score = $meta_score;
        $this->director = $director;
        $this->star1 = $star1;
        $this->star2 = $star2;
        $this->star3 = $star3;
        $this->star4 = $star4;
        $this->no_of_votes = $no_of_votes;
        $this->gross = $gross;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "poster_link" => $this->poster_link,
            "series_title" => $this->series_title,
            "released_year" => $this->released_year,
            "certificate" => $this->certificate,
            "runtime" => $this->runtime,
            "genre" => $this->genre,
            "imdb_rating" => $this->imdb_rating,
            "overview" => $this->overview,
            "meta_score" => $this->meta_score,
            "director" => $this->director,
            "star1" => $this->star1,
            "star2" => $this->star2,
            "star3" => $this->star3,
            "star4" => $this->star4,
            "no_of_votes" => $this->no_of_votes,
            "gross" => $this->gross,
        ];
    }
}
