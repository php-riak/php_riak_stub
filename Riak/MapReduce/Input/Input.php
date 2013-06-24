<?php
namespace Riak\MapReduce\Input;

/**
 * Class Input
 * @package Riak\MapReduce\Input
 * Base class for map reduce input classes
 */
abstract class Input
{
    /** Should return the values to be inserted in inputs part of a mapreduce query, the return value will be
     * inserted directly as ´inputs´ and converted to json automatically by the MapReduce class.
     * @return mixed
     */
    abstract function getValue();
}
