<?php
namespace Money;

class Dollar extends Money
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
     * @return Dollar
     */
    public function times(int $multiplier) : Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }
}
