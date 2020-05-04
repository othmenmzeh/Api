<?php

namespace App\Model;

class HolderBank extends Bank
{
    /** @var null|string */
    private $clearingCodeType;

    /** @var null|string */
    private $clearingCode;

    /**
     * Get the value of clearingCodeType
     */
    public function getClearingCodeType(): ?string
    {
        return $this->clearingCodeType;
    }

    /**
     * Set the value of clearingCodeType
     */
    public function setClearingCodeType(?string $clearingCodeType): void
    {
        $this->clearingCodeType = $clearingCodeType;
    }

    /**
     * Get the value of clearingCode
     */
    public function getClearingCode(): ?string
    {
        return $this->clearingCode;
    }

    /**
     * Set the value of clearingCode
     */
    public function setClearingCode(? string $clearingCode): void
    {
        $this->clearingCode = $clearingCode;
    }
}
