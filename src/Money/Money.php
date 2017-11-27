<?php

namespace Money;

class Money
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
    public function times(int $multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

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
            ($this->currency() === $object->currency())
        );
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->amount . ' ' . $this->currency;
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
