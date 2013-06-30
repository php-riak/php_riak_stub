<?php

namespace Riak\MapReduce\Output;

/**
 * Class Output
 * Represents an MapReduce response
 */
class Output
{
    /**
     * @param mixed $value
     * @param null|int $phase phase identifier
     */
    public function __construct($value, $phase = null) {}

    /**
     * Get decoded value from this mr output
     * @return mixed
     */
    public function getValue() {}

    /**
     * Get phase number if set in response
     * @return int|null
     */
    public function getPhaseNumber() {}
}