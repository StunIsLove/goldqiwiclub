<?php

namespace Goldqiwi\Club;

use Goldqiwi\Core\GuestInterface;
use Goldqiwi\Core\SongInterface;

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

    public function actionToMusic(SongInterface $song): string
    {
        $action = "* {$this->getName()} репетирует танцевать с рюмкой в баре" . PHP_EOL;

        foreach ($this->getDances() as $dance) {
            if ($song->getGenre()->getDance($dance->getName())) {
                $action = "* {$this->getName()} {$dance->getMotion()}" . PHP_EOL;
                break;
            }
        }

        return $action;
    }
}
