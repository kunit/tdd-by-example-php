<?php

namespace Money;

class Franc
{
    /** @var int */
    private $amount;

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
    public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }

    /**
     * @param mixed $object
     * @return bool
     */
    public function equals($object): bool
    {
        return (($object instanceof self) && ($this->amount === $object->amount));
    }
}
