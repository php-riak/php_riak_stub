<?php

namespace Riak\Output;

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

    /** Get first object in objectlist
     * @return \Riak\Object
     */
    public function getFirstObject() {}

}