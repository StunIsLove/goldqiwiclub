<?php

namespace Goldqiwi\Core;

interface GenreInterface
{
    /**
     * @param string $name
     * @param array $dances
     * @param string $motion
     */
    public function __construct(string $name, array $dances, string $motion);

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
     * Возвращает движения в танце
     * @return string
     */
    public function getMotion() : string;
}
