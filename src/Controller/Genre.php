<?php

namespace Goldqiwi\Controller;

use Goldqiwi\Contract\GenreInterface;

class Genre implements GenreInterface
{
    protected string $name;

    protected array $dances = [];

    /**
     * Dance constructor.
     * @param string $name
     * @param array $dances
     */
    public function __construct(string $name, array $dances)
    {
        $this->name = $name;

        foreach ($dances as $dance) {
            $this->dances[$dance->getName()] = $dance;
        }

    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getDances(): array
    {
        return $this->dances;
    }

    public function getDance(string $name)
    {
        return $this->dances[$name];
    }
}
