<?php

require_once __DIR__ . "/../base/LocalWarrior.php";

$GLOBALS['warriorName'] = 'José';

abstract class Warrior extends LocalWarrior
{
    public string $name = 'Shiva';
    public int $speed;
    public int $life = 9875;
    public int $shield = 99;
    public string $imageUrl = 'https://i.redd.it/e6l6kdmxkrbb1.jpg';
    public Weapon|NULL $weapon;
    public function __construct(string $warriorName)
    {
        $this->name = $warriorName;
        $this->speed = 30;
        $this->life = 100;
        $this->shield = 20;
    }
}
