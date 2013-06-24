<?php

namespace Riak\MapReduce\Functions;

/**
 * Class ErlangFunction
 * @package Riak\MapReduce\Functions
 * Represent an erlang function that can be passed to a MapReduce\Phase
 */
class ErlangFunction extends BaseFunction
{
    /**
     * @var string erlang module name
     */
    protected $module;

    /**
     * @var string erlang function name
     */
    protected $function;

    /** Create a new RiakMrErlangFunction
     * @param string $module erlang module name
     * @param string $function erlang function name
     */
    public function __construct($module, $function) {}

    /** Converts this into into an array, that will be converted to json by the MapReduce class.
     * @return array
     */
    public function toArray() {}
}