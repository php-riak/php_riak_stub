<?php

namespace Riak\MapReduce\Functions;

/**
 * Class JavascriptFunction
 * @package Riak\MapReduce\Functions
 * Represent a javascript function that can be passed to a MapReduce\Phase
 */
class JavascriptFunction extends BaseFunction
{
    /**
     * @var bool named or anonymous function
     */
    protected $named;

    /**
     * @var string function name or function source
     */
    protected $source;

    /** Create a new RiakMrJavascriptFunction instance
     * @param bool $named is this a named function or anonymous
     * @param string $source source code or function name
     */
    public function __construct($named, $source) {}

    /** Create a new named JavascriptFunction
     * @param  string $name javascript function name
     * @return JavascriptFunction
     */
    public static function named($name) {}

    /** Creates an anonymous JavascriptFunction
     * @param string $source javascript source
     * @return JavascriptFunction
     */
    public static function anon($source) {}

    /** Converts this into into an array, that will be converted to json by the RiakMapreduce class.
     * @return array
     */
    public function toArray() {}
}