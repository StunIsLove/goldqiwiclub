<?php

namespace Goldqiwi\Contract;

interface GuestInterface
{
    /**
     * @param string $name
     * @param array $dances
     */
    public function __construct(string $name, array $dances);

    /**
     * Возвращает имя гостя
     * @return string
     */
    public function getName() : string;

    /**
     * Возвращает доступные танцы
     * @return array
     */
    public function getDances() : array;

    /**
     * @param SongInterface $song
     * @return string
     */
    public function actionToMusic(SongInterface $song) : string;
}
