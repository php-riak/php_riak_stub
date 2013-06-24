<?php

namespace Riak\MapReduce\Phase;

/**
 * Class Phase
 * @package Riak\MapReduce\Phase
 * A mapreduce phase like map or reduce
 */
abstract class Phase
{
    /**
     * @var string
     */
    protected $function;

    /**
     * @var bool
     */
    protected $keep;

    /**
     * @var array
     */
    protected $arg;

    /** Converts this phase into an array.
     * @return array
     */
    public abstract function toArray();

}