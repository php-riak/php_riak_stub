<?php

/**
 * MapReduce input base class
 * Class RiakMrInput
 */
abstract class RiakMrInput {
    /**
     * Should return the values to be inserted in inputs part of a mapreduce query, the return value will be
     * inserted directly as ´inputs´ and converted to json automatically by the RiakMapreduce class.
     * @return mixed
     */
    public abstract function getValue();
}