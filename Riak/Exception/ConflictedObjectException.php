<?php

namespace Riak\Exception;

/**
 * Class ConflictedObjectException
 * @package Riak\Exception
 * All objects and the vlock is contained in the exception so the conflict can be resolved if needed.
 */
class ConflictedObjectException
{
    // TODO: This class should die

    /**
     * @var \RiakObject[]
     */
    public $objects;

    /**
     * @var string vclock
     */
    public $vclock;
}