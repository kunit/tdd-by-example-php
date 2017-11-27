<?php

namespace Money;

abstract class Money
{
    /** @var int */
    protected $amount;

    /** @var string */
    protected $currency;

    /**
     * constructor
     *
     * @param int $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency = null)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @param int $multiplier
     * @return Money
     */
    abstract public function times(int $multiplier): Money;

    /**
     * @return string
     */
    public function currency(): string
    {
        return $this->currency;
    }

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
        return new Dollar($amount, 'USD');
    }

    /**
     * @param int $amount
     * @return Money
     */
    public static function franc(int $amount): Money
    {
        return new Franc($amount, 'CHF');
    }
}
