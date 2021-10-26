<?php

namespace Goldqiwi\Core;

interface SongInterface
{
    /**
     * @param string $name
     * @param GenreInterface $genre
     */
    public function __construct(string $name, GenreInterface $genre);

    /**
     * Возвращает имя гостя
     * @return string
     */
    public function getName() : string;

    /**
     * Возвращает доступные танцы
     * @return GenreInterface
     */
    public function getGenre() : GenreInterface;
}