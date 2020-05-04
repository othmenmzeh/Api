<?php

namespace App\Model;

class Amount
{
    /** @var string */
    private $value;

    /** @var string */
    private $currency;

    /**
     * Get the value of value
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Set the value of value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    /**
     * Get the value of currency
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set the value of currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }
}
