<?php

namespace Money;

class Franc extends Money
{
    /**
     * constructor
     *
     * @param int $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency = null)
    {
        parent::__construct($amount, $currency);
    }
}
