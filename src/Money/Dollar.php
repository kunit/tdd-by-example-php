<?php
namespace Money;

class Dollar
{
    public $amount;

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
     * @param $object
     * @return bool
     */
    public function equals($object) : bool
    {
        return (($object instanceof self) && ($this->amount === $object->amount));
    }
}
