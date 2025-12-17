<?php

require_once __DIR__ . '/Entiteit.php';
require_once __DIR__ . '/../interfaces/IDefense.php';

class Shield extends Entiteit implements IDefense
{
    public string $Name;
    public int $Durabillity;
    public int $Recharge;
    public int $RechargeTime;


    public function __construct(string $Name,int $Durabillity,int $Recharge, int $RechargeTime)
    {
        $this->Name = $Name;
        $this->Durabillity = $Durabillity;
        $this->Recharge = $Recharge;
        $this->RechargeTime = $RechargeTime;
    }

    public function absorbDamage(int $damage): int
    {
        if ($this->Durabillity > 0) {
            $absorbed = min($damage, $this->Durabillity);
            $this->Durabillity -= $absorbed;
            return $damage - $absorbed;
        }
        return $damage;
    }

    public function isActive(): bool
    {
        return $this->Durabillity > 0;
    }
}
