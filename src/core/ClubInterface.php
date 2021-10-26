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
     * @return GenreInterface
     */
    public function setGenre(string $name);

    /**
     * @param array $songs
     * @return void
     */
    public function addPlaylist(array $songs);

    /**
     * @param DanceInterface $dance
     * @return void
     */
    public function addDance(DanceInterface $dance);

    /**
     * @param string $name имя танца
     * @return DanceInterface
     */
    public function setDance(string $name): DanceInterface;

    /**
     * Запускает вечеринку в клубе
     * @return void
     */
    public function startParty();
}
