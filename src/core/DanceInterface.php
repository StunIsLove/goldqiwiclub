<?php

namespace Goldqiwi\Core;

interface DanceInterface
{
    /**
     * @param string $name
     * @param string $dance
     * @param string $motion
     */
    public function __construct(string $name, string $dance, string $motion);

    /**
     * Возвращает название танца
     * @return string
     */
    public function getName() : string;

    /**
     * Возвращает жанр танца
     * @return string
     */
    public function getGenre() : string;

    /**
     * Возвращает описание танца
     * @return array
     */
    public function getMotion() : array;

    /**
     * Заставляет посетителей начать танцевать
     * @param array $state
     * @return array
     */
    public function startDancing(array $state) : array;
}
