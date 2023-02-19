<?php

require_once './vendor/autoload.php';

use Goldqiwi\Controller\Club;
use Goldqiwi\Controller\Dance;
use Goldqiwi\Controller\Genre;
use Goldqiwi\Controller\Guest;
use Goldqiwi\Controller\Song;

$club = new Club();

$club->addDance(new Dance('pop', 'плавно танцует туловищем, руками, ногами и головой'));
$club->addDance(new Dance('hiphop', 'качает телом и головой, согнув руки и ноги'));
$club->addDance(new Dance('rnb', 'двигается в такт пластично, волнообразно'));
$club->addDance(new Dance('electrodance', 'энергично двигает ногами и руками в ритме'));
$club->addDance(new Dance('house', 'плавно двигает руками, ногами и туловищем под ритм'));

// Добавление одного жанра
$club->addGenre(new Genre('pop', [$club->getDance('pop')]));

// Добавление нескольких жанров
$club->addGenres([
    new Genre('rnb', [$club->getDance('hiphop'), $club->getDance('rnb')]),
    new Genre('electro', [$club->getDance('house'), $club->getDance('electrodance')])
]);

$club->addPlaylist([
    new Song("O-Zone - Dragostea Din Tei", $club->getGenre('electro')),
    new Song("Coolio - Gangsta's Paradise", $club->getGenre('rnb')),
    new Song("ABBA - Gimme! Gimme! Gimme!", $club->getGenre('pop')),
    new Song("Eiffel 65 - Blue", $club->getGenre('electro')),
    new Song("Dr. Dre ft. Snoop Dogg - Still D.R.E.", $club->getGenre('rnb')),
    new Song("Boney M. - Rasputin", $club->getGenre('pop')),
    new Song('Scatman John - Scatman', $club->getGenre('electro')),
    new Song("Warren G - Regulate", $club->getGenre('rnb')),
    new Song("Rick Astley - Never Gonna Give You Up", $club->getGenre('pop')),
    new Song("Bomfunk MC's - Freestyler", $club->getGenre('electro'))
]);

// Добавление одного гостя
$club->addGuest(new Guest('Робин Гудович', [$club->getDance('rnb'), $club->getDance('pop')]));

// Добавление нескольких гостей
$club->addGuests([
    new Guest('Стивен Спилбергович', [$club->getDance('electrodance')]),
    new Guest('Газман Олегович', [$club->getDance('house'), $club->getDance('electrodance')]),
    new Guest('Ривз Кианович', [$club->getDance('hiphop')]),
    new Guest('Моника Везуччи', [$club->getDance('electrodance'), $club->getDance('hiphop')]),
    new Guest('Алла Попугачева', [$club->getDance('rnb'), $club->getDance('pop')])
]);

$club->startParty();
