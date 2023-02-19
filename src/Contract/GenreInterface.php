<?php

namespace Goldqiwi\Contract;

interface GenreInterface
{
    /**
     * @param string $name
     * @param array $dances
     */
    public function __construct(string $name, array $dances);

    /**
     * Возвращает название жанра
     * @return string
     */
    public function getName() : string;

    /**
     * Возвращает подходящие танцы
     * @return array
     */
    public function getDances() : array;

    /**
     * Возвращает танец по имени
     * @param string $name
     * @return mixed
     */
    public function getDance(string $name);
}
