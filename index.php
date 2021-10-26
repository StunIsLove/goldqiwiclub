<?php

require_once './src/loader.php';

use Goldqiwi\Club\Club;
use Goldqiwi\Club\Genre;
use Goldqiwi\Club\Guest;
use Goldqiwi\Club\Song;

$club = new Club();

// Добавление одного жанра
$club->addGenre(new Genre('pop', ['pop'], 'плавно танцует туловищем, руками, ногами и головой'));

// Добавление нескольких жанров
$club->addGenres([
    new Genre('rnb', ['hiphop', 'rnb'], 'качает телом и головой, согнув руки и ноги'),
    new Genre('electro', ['house', 'electrodance'], 'двигает ногами и руками в ритме')
]);

// Добавление одного гостя
$club->addGuest(new Guest('Робин Гудович', [$club->setGenre('rnb'), $club->setGenre('pop')]));

// Добавление нескольких гостей
$club->addGuests([
    new Guest('Стивен Спилбергович', [$club->setGenre('electro')]),
    new Guest('Газман Олегович', [$club->setGenre('electro'), $club->setGenre('pop')]),
    new Guest('Ривз Кианович', []),
    new Guest('Моника Везуччи', [$club->setGenre('electro'), $club->setGenre('rnb')]),
    new Guest('Алла Попугачева', [$club->setGenre('rnb')])
]);

$club->addPlaylist([
    new Song("O-Zone - Dragostea Din Tei", $club->setGenre('electro')),
    new Song("Coolio - Gangsta's Paradise", $club->setGenre('rnb')),
    new Song("ABBA - Gimme! Gimme! Gimme!", $club->setGenre('pop')),
    new Song("Eiffel 65 - Blue", $club->setGenre('electro')),
    new Song("Dr. Dre ft. Snoop Dogg - Still D.R.E.", $club->setGenre('rnb')),
    new Song("Boney M. - Rasputin", $club->setGenre('pop')),
    new Song('Scatman John - Scatman', $club->setGenre('electro')),
    new Song("Warren G - Regulate", $club->setGenre('rnb')),
    new Song("Rick Astley - Never Gonna Give You Up", $club->setGenre('pop')),
    new Song("Bomfunk MC's - Freestyler", $club->setGenre('electro'))
]);

$club->startParty();
