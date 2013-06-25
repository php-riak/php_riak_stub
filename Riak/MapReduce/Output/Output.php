<?php

namespace Riak\MapReduce\Output;

/**
 * Class Output
 * Represents an MapReduce response
 */
class Output
{
    /**
     * @var mixed json decoded value
     */
    public $value;
    // TODO Make private and add getter

    /**
     * @var null|int phase identifier
     */
    public $phase;
    // TODO Make private and add hasPhase + getPhase

    /**
     * @param mixed $value
     * @param null|int $phase phase identifier
     */
    public function __construct($value, $phase = null) {}
}