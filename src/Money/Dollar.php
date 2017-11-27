<?php
namespace Money;

class Dollar
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
     * @return Dollar
     */
    public function times(int $multiplier) : Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }

    /**
     * @param mixed $object
     * @return bool
     */
    public function equals($object) : bool
    {
        return (($object instanceof self) && ($this->amount === $object->amount));
    }
}
