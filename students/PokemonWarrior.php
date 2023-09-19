<?php

class PokemonWarrior extends Warrior
{
    public int $level = 100;
    public function getPower()
    {
        return $this->level;
    }
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->level = 1;
    }
}
