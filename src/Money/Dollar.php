<?php
namespace Money;

class Dollar extends Money
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

    /**
     * @param int $multiplier
     * @return Dollar
     */
    public function times(int $multiplier) : Money
    {
        return new Dollar($this->amount * $multiplier);
    }
}
