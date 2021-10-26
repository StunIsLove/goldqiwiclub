<?php

namespace Goldqiwi\Club;

use Goldqiwi\Core\DanceInterface;

class Dance implements DanceInterface
{
    protected string $name;

    protected string $motion;

    /**
     * Dance constructor.
     * @param string $name
     * @param string $motion
     */
    public function __construct(string $name, string $motion)
    {
        $this->name = $name;
        $this->motion = $motion;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getMotion(): string
    {
        return $this->motion;
    }
}
