<?php

namespace Goldqiwi\Core;

interface Club
{
    /**
     * Adds a guest
     * @param array $guest
     * @return void
     */
    public function addGuest(array $guest);

    /**
     * Launches the work of the club
     * @return void
     */
    public function launch();
}