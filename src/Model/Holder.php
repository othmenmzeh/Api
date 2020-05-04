<?php

namespace App\Model;

class Holder
{

    /** @var string */
    private $name;

    /** @var string */
    private $type;

    /** @var null|Address */
    private $address;

    

    /**
     * Get the value of name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Get the value of type
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set the value of type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Get the value of address
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }

    /**
     * Set the value of address
     */
    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }
}
