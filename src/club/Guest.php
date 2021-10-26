<?php

namespace Goldqiwi\Club;

use Goldqiwi\Core\GuestInterface;

class Guest implements GuestInterface
{
    protected string $name;

    protected array $dances = [];

    /**
     * Dance constructor.
     * @param string $name
     * @param array $dance
     */
    public function __construct(string $name, array $dance)
    {
        $this->name = $name;
        $this->dances = $dance;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getDances() : array
    {
        return $this->dances;
    }
}
