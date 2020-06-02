<?php

namespace Cards;

require 'Card.php';

use Cards\Card as Card;

class Deck
{
    /*
     *
     * */
    private $cards = [];
    public function __construct()
    {
        $this->cards[] = new Card();
    }

    public function printer()
    {
        var_dump($this->cards);
    }
}


