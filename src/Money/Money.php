<?php

namespace Money;

class Money
{
    /** @var int */
    protected $amount;

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
}
