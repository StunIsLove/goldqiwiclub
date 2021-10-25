<?php

namespace Goldqiwi\Core;

interface ClubInterface
{
    /**
     * Добавляет гостей
     * @param array $guest
     * @return void
     */
    public function addGuest(array $guest);

    /**
     * Запускает вечеринку в клубе
     * @return void
     */
    public function startParty();
}
