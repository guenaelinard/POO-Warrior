<?php

class MarvelWarrior extends Warrior
{
    public int $superPower = 99;
    public function getPower()
    {
        return $this->superPower;
    }
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->superPower = 100;
    }
}
