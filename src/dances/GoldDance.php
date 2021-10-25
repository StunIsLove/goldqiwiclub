<?php

namespace Goldqiwi\Dance;

use Goldqiwi\Core\DanceInterface;

class Dance implements DanceInterface
{
    protected string $name;

    protected string $genre;

    protected string $motion;

    /**
     * Dance constructor.
     * @param string $name
     * @param string $genre
     * @param string $motion
     */
    public function __construct(string $name, string $genre, string $motion)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->motion = $motion;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getGenre() : string
    {
        return $this->genre;
    }

    public function getMotion() : array
    {
        return $this->motion;
    }

    public function startDancing(array $state) : array
    {
        // TO DO: Начать танец

        return $state;
    }
}
