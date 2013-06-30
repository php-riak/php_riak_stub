<?php

namespace Riak\MapReduce\Input;


class BucketInput extends Input
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var array|null
     */
    public $keyFilters;
    // TODO should not be public

    /**
     * @var string|null
     */
    protected $idxname;

    /**
     * @var string|null
     */
    protected $idxstart;

    /**
     * @var string|null
     */
    protected $idxend;

    /** Create a new bucket input object
     * @param string $name bucket name
     */
    public function __construct($name) {}

    /**
     * Set a secondary index filter.
     * if no end value is provided the query will only considered exact.
     * @param string $indexName name of the index to filter on, should always end on _int or _bin
     * @param string $start start value inclusive
     * @param null|string $end end value inclusive
     * @return BucketInput
     */
    public function setIndexFilter($indexName, $start, $end = null) {}

    /** Get the value that should be inserted as input in the MapReduce query.
     * @return mixed
     */
    function getValue() {}
}