<?php

namespace Goldqiwi\Controller;

use Goldqiwi\Contract\SongInterface;
use Goldqiwi\Contract\GenreInterface;

class Song implements SongInterface
{
    protected string $name;

    protected GenreInterface $genre;

    /**
     * Dance constructor.
     * @param string $name
     * @param GenreInterface $genre
     */
    public function __construct(string $name, GenreInterface $genre)
    {
        $this->name = $name;
        $this->genre = $genre;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getGenre() : GenreInterface
    {
        return $this->genre;
    }
}
