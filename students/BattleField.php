<?php

require_once __DIR__ . "/../base/BaseBattleField.php";
require_once "Warrior.php";


class BattleField extends BaseBattleField
{
    public static function createMyWarrior()
    {
        $nej = new PokemonWarrior($GLOBALS['warriorName']);
        $nej->imageUrl = "https://i.pinimg.com/originals/d9/d0/33/d9d0330a72055a45b1382948691923b5.png";
        $nej->weapon = new Weapon(1, 100);
        $nej->weapon->imageUrl = 'https://cdn130.picsart.com/302894067466211.png';
        $nej->saveNew();
    }
    public static function createOtherWarrior()
    {
        $wolf = new PokemonWarrior('Zacian');
        $wolf->imageUrl = "https://www.pokepedia.fr/images/thumb/5/52/Zacian_%28%C3%89p%C3%A9e_Supr%C3%AAme%29-EB.png/800px-Zacian_%28%C3%89p%C3%A9e_Supr%C3%AAme%29-EB.png";
        $wolf->weapon = new Weapon(2, 65);
        $wolf->weapon->imageUrl = 'https://swordshield.pokemon.com/assets/img/screenshots/fr-fr/11_27_p13_04.jpg';
        $wolf->saveNew();
    }
}

