<?php

require_once './src/loader.php';

use Goldqiwi\Club\Club;
use Goldqiwi\Club\Dance;
use Goldqiwi\Club\Genre;
use Goldqiwi\Club\Guest;
use Goldqiwi\Club\Song;

$club = new Club();

$club->addDance(new Dance('pop', 'плавно танцует туловищем, руками, ногами и головой'));
$club->addDance(new Dance('hiphop', 'качает телом и головой, согнув руки и ноги'));
$club->addDance(new Dance('rnb', 'двигается в такт пластично, волнообразно'));
$club->addDance(new Dance('electrodance', 'энергично двигает ногами и руками в ритме'));
$club->addDance(new Dance('house', 'плавно двигает руками, ногами и туловищем под ритм'));

// Добавление одного жанра
$club->addGenre(new Genre('pop', [$club->setDance('pop')]));

// Добавление нескольких жанров
$club->addGenres([
    new Genre('rnb', [$club->setDance('hiphop'), $club->setDance('rnb')]),
    new Genre('electro', [$club->setDance('house'), $club->setDance('electrodance')])
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

// Добавление одного гостя
$club->addGuest(new Guest('Робин Гудович', [$club->setDance('rnb'), $club->setDance('pop')]));

// Добавление нескольких гостей
$club->addGuests([
    new Guest('Стивен Спилбергович', [$club->setDance('electrodance')]),
    new Guest('Газман Олегович', [$club->setDance('house'), $club->setDance('electrodance')]),
    new Guest('Ривз Кианович', [$club->setDance('hiphop')]),
    new Guest('Моника Везуччи', [$club->setDance('electrodance'), $club->setDance('hiphop')]),
    new Guest('Алла Попугачева', [$club->setDance('rnb')])
]);

$club->startParty();
