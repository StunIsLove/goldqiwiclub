<?php

namespace Goldqiwi\Club;

use Goldqiwi\Core\ClubInterface;

class GoldQiwiClub implements ClubInterface
{
    protected array $guests = [];

    /**
     * @param array $guest
     */
    public function addGuest(array $guest)
    {
        $this->guests[] = $guest;
    }

    public function startParty()
    {
        foreach ($this->guests as $guest) {
            print(json_encode($guest, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT));
        }
    }
}
