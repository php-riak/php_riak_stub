<?php

/**
 * Class RiakBucketProperties
 * Properties for a bucket
 */
class RiakBucketProperties
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
    public function __construct($nVal, $allowMult) {}
}