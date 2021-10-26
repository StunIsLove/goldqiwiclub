<?php

namespace Goldqiwi\Club;

use Goldqiwi\Core\ClubInterface;
use Goldqiwi\Core\GenreInterface;
use Goldqiwi\Core\GuestInterface;

class Club implements ClubInterface
{
    protected array $guests = [];

    protected array $genres = [];

    protected array $playlist = [];

    /**
     * @param GuestInterface $guest
     */
    public function addGuest(GuestInterface $guest)
    {
        $this->guests[] = $guest;
    }

    /**
     * Добавление нескольких гостей
     * Метод, не описанный в интерфейсе, как пример расширяемости кода
     * @param array $guests
     * @return void
     */
    public function addGuests(array $guests)
    {
        foreach ($guests as $guest) {
            $this->addGuest($guest);
        }
    }

    /**
     * @param GenreInterface $genre
     */
    public function addGenre(GenreInterface $genre)
    {
        $this->genres[$genre->getName()] = $genre;
    }

    /**
     * Добавление нескольких жанров
     * Метод, не описанный в интерфейсе, как пример расширяемости кода
     * @param array $genres
     * @return void
     */
    public function addGenres(array $genres)
    {
        foreach ($genres as $genre) {
            $this->addGenre($genre);
        }
    }

    public function setGenre(string $name)
    {
        return $this->genres[$name];
    }

    public function addPlaylist(array $songs)
    {
        foreach ($songs as $song) {
            $this->playlist[] = $song;
        }
    }

    public function startParty()
    {
        print("Начинаем вечеринку!" . PHP_EOL);

        foreach ($this->playlist as $song) {
            print("Сейчас играет: {$song->getName()}, жанр: {$song->getGenre()->getName()}" . PHP_EOL);
            print('==================================================' . PHP_EOL);

            foreach ($this->guests as $key => $guest) {
                $guest->action = "{$key}. {$guest->getName()} репетирует танцевать с рюмкой в баре" . PHP_EOL;

                foreach ($guest->getDances() as $dance) {
                    if ($dance == $song->getGenre()) {
                        $guest->action = "{$key}. {$guest->getName()} {$dance->getMotion()}" . PHP_EOL;
                        break;
                    }
                }

                print($guest->action);
            }

            print('==================================================' . PHP_EOL);
        }
    }
}
