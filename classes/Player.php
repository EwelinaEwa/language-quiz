<?php

class Player
{
//     TODO: add name and score
    public string $name;
    public int $score;

    public function __construct($name, $score)
    {
        // TODO: add 👤 automatically to their name
        $this->name = $name;
        $this->score = $score;
    }


}