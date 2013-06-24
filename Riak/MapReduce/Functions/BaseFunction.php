<?php

namespace Riak\MapReduce\Functions;

/**
 * Class BaseFunction
 * @package Riak\MapReduce\Functions
 * Base function for map reduce functions
 */
abstract class BaseFunction {

    /**
     * Converts this into into an array, that will be converted to json by the RiakMapreduce class.
     * @return array
     */
    public abstract function toArray();

}