<?php
namespace Riak\Output;

/**
 * Class GetOutput
 * @package Riak\Output
 */
class GetOutput
{
    /**
     * @var string|null
     */
    protected $vClock;

    /**
     * @var Object[]|null
     */
    protected $objectList;

    /**
     * @var bool|null
     */
    protected $unchanged;

    /**
     * Get list of returned objects
     * @return Object[]|null
     */
    public function getObjectList() {}

    /**
     * Get the returned vclock
     * @return string|null
     */
    public function getVClock() {}

    /**
     * Content was unchanged
     * @return bool
     */
    public function isUnchanged() {}

    /**
     * Does this output contain more than one object
     * @return bool
     */
    public function hasSiblings() {}
}