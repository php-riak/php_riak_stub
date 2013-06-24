<?php

namespace Riak\MapReduce\Phase;

/**
 * Class ReducePhase
 * @package Riak\MapReduce\Phase
 */
class ReducePhase extends Phase
{

    /** Create a new reduce phase
     * @param string $function reduce function name or function
     * @param bool $keep keep
     * @param array $args function arguments
     */
    public function __construct($function, $keep, $args = null) {}

    /** Converts this phase into an array.
     * @return array
     */
    public function toArray() {}
}