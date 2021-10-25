<?php

require_once './src/loader.php';

$goldQiwiClub = new goldqiwi\club\GoldQiwi();

$goldQiwiClub->addGuest([
    'name' => 'Тест Тестович',
    'dance' => ['rnb']
]);

$goldQiwiClub->launch();
