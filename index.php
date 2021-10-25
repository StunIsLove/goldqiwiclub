<?php

require_once './src/loader.php';

$goldQiwiClub = new Goldqiwi\Club\GoldQiwiClub();

$goldQiwiClub->addGuest([
    'name' => 'Тест Тестович',
    'dances' => ['rnb', 'pop']
]);

$goldQiwiClub->startParty();
