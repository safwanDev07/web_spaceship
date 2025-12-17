<?php

interface IWeapon
{
    public function getDamage(): int;
    public function fire(): int;
}

?>