<?php

namespace App\Core\Application\Service\Movie;

use JsonSerializable;

class MovieResponse implements JsonSerializable
{
    private string $id;
    private string $poster_link;
    private string $series_title;
    private string $overview;

    public function __construct(string $id, string $poster_link, string $series_title, string $overview)
    {
        $this->id = $id;
        $this->poster_link = $poster_link;
        $this->series_title = $series_title;
        $this->overview = $overview;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "poster_link" => $this->poster_link,
            "series_title" => $this->series_title,
            "overview" => $this->overview
        ];
    }
}
