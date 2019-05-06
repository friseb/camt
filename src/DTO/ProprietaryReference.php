<?php

namespace Genkgo\Camt\DTO;

/**
 * Class ProprietaryReference
 * @package Genkgo\Camt\DTO
 */
class ProprietaryReference
{
    /**
     * @var null|string
     */
    private $type;

    /**
     * @var null|string
     */
    private $reference;

    /**
     * @param null|string $type
     * @param null|string $reference
     */
    public function __construct($type, $reference)
    {
        $this->type = $type;
        $this->reference = $reference;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getReference()
    {
        return $this->reference;
    }
}
