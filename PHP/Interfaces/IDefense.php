<?php

interface IDefense
{
    public function absorbDamage(int $damage): int;
    public function isActive(): bool;
}

?>