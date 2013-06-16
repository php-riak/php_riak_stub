<?php

/**
 * Class RiakMrInputBucket
 * Bucket input class for a mapreduce query
 */
class RiakMrInputBucket extends RiakMrInput {

    /**
     * Name of the bucket
     * @var string
     */
    protected $name;

    /**
     * An associative array with key filters, this array is converted to json directly and insert directly below
     * ´key_filters´ in the mapreduce request.
     * @var array
     */
    public $keyFilters;

    /**
     * If input should be filtered by a secondary index, this property should contain the name of the index.
     * @var string
     */
    protected $idxname;

    /**
     * Secondary index start value (inclusive)
     * @var mixed
     */
    protected $idxstart;

    /**
     * Secondary index end value (inclusive)
     * @var mixed
     */
    protected $idxend;

    /**
     * @param string $name name of the input bucket
     */
    public function __construct($name) {}

    /**
     * Set a secondary index filter.
     * if no end value is provided the query will only considered exact.
     * @param string $indexname name of the index to filter on, should always end on _int or _bin
     * @param mixed $start start value inclusive
     * @param null|mixed $end end value inclusive
     */
    public function setIndexFilter($indexname, $start, $end=null) {}

    /**
     * Should return the values to be inserted in inputs part of a mapreduce query, the return value will be
     * inserted directly as ´inputs´ and converted to json automatically by the RiakMapreduce class.
     * @return mixed
     */
    public function getValue() {}
}