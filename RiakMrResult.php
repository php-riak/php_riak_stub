<?php

/**
 * Class RiakMrResult
 * Represents an Mapreduce response
 */
class RiakMrResult
{
    /**
     * @var mixed json decoded value
     */
    public $value;

    /**
     * @var null|int phase identifier
     */
    public $phase;

    /**
     * @param mixed $value
     * @param null|int $phase phase identifier
     */
    public function __construct($value, $phase = null) {}
}