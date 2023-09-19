<?php

class StartrekWarrior extends Warrior
{
    public int $mentalPower = 785;
    public function getPower()
    {
        return $this->mentalPower;
    }
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->mentalPower = 8;
    }
}
