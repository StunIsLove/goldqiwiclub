<?php

require_once './src/loader.php';

$goldQiwiClub = new Goldqiwi\Club\GoldQiwi();

$goldQiwiClub->addGuest([
    'name' => 'Тест Тестович',
    'dances' => ['rnb', 'pop']
]);

$goldQiwiClub->launch();
