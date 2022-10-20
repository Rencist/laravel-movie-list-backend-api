<?php

namespace App\Core\Application\Service\RandomMovie;

use JsonSerializable;

class SingleRandomMovieResponse implements JsonSerializable
{
    private array $data;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function jsonSerialize(): array
    {
        return [
            "data_per_page" => $this->data
        ];
    }
}
