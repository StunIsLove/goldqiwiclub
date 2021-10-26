<?php

namespace Goldqiwi\Core;

interface ClubInterface
{
    /**
     * Добавляет гостя
     * @param GuestInterface $guest
     * @return void
     */
    public function addGuest(GuestInterface $guest);

    /**
     * @param GenreInterface $genre
     * @return void
     */
    public function addGenre(GenreInterface $genre);

    /**
     * @param string $name имя жанра
     * @return void
     */
    public function setGenre(string $name);

    /**
     * @param array $songs
     * @return void
     */
    public function addPlaylist(array $songs);

    /**
     * Запускает вечеринку в клубе
     * @return void
     */
    public function startParty();
}
