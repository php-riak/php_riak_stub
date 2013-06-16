<?php

/**
 * Class RiakException
 * Base class for all Riak related exceptions
 */
class RiakException extends Exception {}

/**
 * Class RiakBadArgumentsException
 * A bad argument was passed to a function
 */
class RiakBadArgumentsException extends RiakException {}

/**
 * Class RiakConnectionException
 * Could not connect to the server
 */
class RiakConnectionException extends RiakException {}

/**
 * Class RiakCommunicationException
 * An error occured while trying to communicate with the server
 */
class RiakCommunicationException extends RiakException {}

/**
 * Class RiakResponseException
 * Riak gave an unexpected response to a message
 */
class RiakResponseException extends RiakException {}

/**
 * Class RiakNotFoundException
 * Thrown when the requested object was not found on the server
 */
class RiakNotFoundException extends RiakException {}

/**
 * Class RiakConflictedObjectException
 * Thrown when multiple objects was found with the same key.
 * All objects and the vlock is contained in the exception so the conflict can be resolved if needed.
 */
class RiakConflictedObjectException extends RiakException
{
    /**
     * @var RiakObject[]
     */
    public $objects;

    /**
     * @var string vclock
     */
    public $vclock;
}