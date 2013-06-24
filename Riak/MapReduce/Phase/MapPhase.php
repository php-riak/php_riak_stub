<?php

namespace Riak\MapReduce\Phase;

/**
 * Class MapPhase
 * @package Riak\MapReduce\Phase
 */
class MapPhase extends Phase
{

    /**
     * @param string $function map function name or function code
     * @param bool $keep keep
     * @param array $args function arguments
     */
    public function __construct($function, $keep, $args = null) {}

    /** Converts this phase into an array.
     * @return array
     */
    public function toArray() {}
}