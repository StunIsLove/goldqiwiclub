<?php

namespace Goldqiwi\Club;

use Goldqiwi\Core\GenreInterface;

class Genre implements GenreInterface
{
    protected string $name;

    protected array $dances = [];

    protected string $motion;

    /**
     * Dance constructor.
     * @param string $name
     * @param array $dances
     * @param string $motion
     */
    public function __construct(string $name, array $dances, string $motion)
    {
        $this->name = $name;
        $this->dances = $dances;
        $this->motion = $motion;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getDances(): array
    {
        return $this->dances;
    }

    public function getMotion() : array
    {
        return $this->motion;
    }
}
