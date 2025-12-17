<?php

interface IMovable
{
    public function move(int $distance): void;
    public function getPosition(): int;
}

?>