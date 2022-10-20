<?php

namespace App\Core\Domain\Models\Movie;

use App\Core\Domain\Models\Movie\MovieId;


class Movie
{
    private MovieId $id;
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

    public function __construct(MovieId $id, string $poster_link, string $series_title, 
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

    public static function create(MovieId $id, string $poster_link, string $series_title, 
    ?string $released_year, ?string $certificate, ?string $runtime, ?string $genre, ?string $imdb_rating, 
    string $overview, ?string $meta_score, ?string $director, ?string $star1, ?string $star2, 
    ?string $star3, ?string $star4, ?string $no_of_votes, ?string $gross): self
    {
        return new self(
            $id,
            $poster_link,
            $series_title,
            $released_year,
            $certificate,
            $runtime,
            $genre,
            $imdb_rating,
            $overview,
            $meta_score,
            $director,
            $star1,
            $star2,
            $star3,
            $star4,
            $no_of_votes,
            $gross,
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

    public function getCertificate(): ?string
    {
        return $this->certificate;
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

    public function getMetaScore(): ?string
    {
        return $this->meta_score;
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

    public function getStar4(): ?string
    {
        return $this->star4;
    }

    public function getNoOfVotes(): ?string
    {
        return $this->no_of_votes;
    }

    public function getGross(): ?string
    {
        return $this->gross;
    }


}