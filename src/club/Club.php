<?php

namespace Goldqiwi\Club;

use Goldqiwi\Core\ClubInterface;
use Goldqiwi\Core\GenreInterface;
use Goldqiwi\Core\GuestInterface;
use Goldqiwi\Core\DanceInterface;

class Club implements ClubInterface
{
    protected array $guests = [];

    protected array $dances = [];

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

    /**
     * @param string $name
     * @return GenreInterface
     */
    public function setGenre(string $name): GenreInterface
    {
        return $this->genres[$name];
    }

    /**
     * @param array $songs
     */
    public function addPlaylist(array $songs)
    {
        foreach ($songs as $song) {
            $this->playlist[] = $song;
        }
    }

    /**
     * @param DanceInterface $dance
     */
    public function addDance(DanceInterface $dance)
    {
        $this->dances[$dance->getName()] = $dance;
    }

    /**
     * @param string $name
     * @return DanceInterface
     */
    public function setDance(string $name) : DanceInterface
    {
        return $this->dances[$name];
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
                    if ($song->getGenre()->getDance($dance->getName())) {
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
