<?php

/**
 * Class RiakBucketProperties
 * Properties for a bucket
 */
abstract class RiakBucketProperties
{
    /**
     * @var bool allow mults in bucket
     */
    public $allowMult;

    /**
     * @var int n value for bucket
     */
    public $nVal;

    /**
     * @param $nVal int n value
     * @param $allowMult bool allow mults
     */
    public abstract function __construct($nVal, $allowMult);
}