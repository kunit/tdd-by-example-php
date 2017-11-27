<?php

namespace Money;

abstract class Money
{
    /** @var int */
    protected $amount;

    /**
     * @param int $multiplier
     * @return Money
     */
    abstract public function times(int $multiplier): Money;

    /**
     * @param mixed $object
     * @return bool
     */
    public function equals($object): bool
    {
        return (($object instanceof self) &&
            ($this->amount === $object->amount) &&
            (\get_class($object) === \get_class($this))
        );
    }

    /**
     * @param int $amount
     * @return Money
     */
    public static function dollar(int $amount) : Money
    {
        return new Dollar($amount);
    }

    /**
     * @param int $amount
     * @return Money
     */
    public static function franc(int $amount): Money
    {
        return new Franc($amount);
    }
}
