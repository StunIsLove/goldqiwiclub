<?php

namespace goldqiwi\club;

use goldqiwi\core\Club;

class GoldQiwi implements Club
{
    protected array $guests = [];

    /**
     * @param array $guest
     */
    public function addGuest(array $guest)
    {
        $this->guests[] = $guest;
    }

    public function launch()
    {
        foreach ($this->guests as $guest) {
            print(json_encode($guest, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT));
        }
    }


}