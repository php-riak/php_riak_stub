<?php

/**
 * Class RiakMrJavascriptFunction
 * Represent a javascript function that can be passed to RiakMapreducePhase
 */
class RiakMrJavascriptFunction extends RiakMrFunction {

    /**
     * @var bool named or anonymous function
     */
    protected $named;

    /**
     * @var string function name or function source
     */
    protected $source;

    /**
     * Create a new RiakMrJavascriptFunction instance
     * @param bool $named is this a named function or anonymous
     * @param string $source source code or function name
     */
    public function __construct($named, $source) {}

    /**
     * Create a new named javascript function
     * @param $name javascript function name
     * @return RiakMrJavascriptFunction
     */
    public static function named($name) {}

    /**
     * Creates an anonymous RiakMrJavascriptFunction
     * @param string $source javascript source
     * @return RiakMrJavascriptFunction
     */
    public static function anon($source) {}

    /**
     * Converts this into into an array, that will be converted to json by the RiakMapreduce class.
     * @return array
     */
    public function toArray() {}
}