<?php

namespace Riak\Output;
use Riak\Exception\NonUniqueException;
use Riak\Exception\UnresolvedConflictException;
use Riak\ObjectList;

/**
 * Class Output
 * @package Riak\Output
 */
class Output
{
    /**
     * @var string|null
     */
    protected $key = null;

    /**
     * @var string|null
     */
    protected $vClock = null;

    /**
     * @var \Riak\Object[]
     */
    protected $objectList  = array();

    /**
     * Get list of returned objects
     * @return ObjectList
     */
    public function getObjectList() {}

    /**
     * Get the returned vclock
     * @return string|null
     */
    public function getVClock() {}

    /**
     * Does this output contain more than one object
     * @return bool
     */
    public function hasSiblings() {}

    /**
     * @return string|null
     */
    public function getKey() {}

    /** Does this output have atleast one object
     * @return boolean
     */
    public function hasObject() {}

    /** Get object from output, if output contains siblings this function will call the
     * ConflictResolver given when ->get() was called or if no resolver was set it will se if a resolver
     * is set on bucket level and call that.
     * If no unique object can be resolve a NonUniqueException will be thrown.
     * @return \Riak\Object|null
     * @throws UnresolvedConflictException
     * @throws NonUniqueException
     */
    public function getObject() {}

    /** Get first object in objectlist
     * @return \Riak\Object|null
     */
    public function getFirstObject() {}

}