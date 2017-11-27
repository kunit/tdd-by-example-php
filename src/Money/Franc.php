<?php

namespace Money;

class Franc extends Money
{
    /**
     * constructor
     *
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param int $multiplier
     * @return Franc
     */
    public function times(int $multiplier) : Money
    {
        return new Franc($this->amount * $multiplier);
    }
}
