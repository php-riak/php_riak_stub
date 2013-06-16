<?php

/**
 * Class RiakBucket
 * Class that handles all functions related to specific bucket
 */
abstract class RiakBucket {

    /**
     * Create a new bucket object
     * @param RiakClient $client riak client
     * @param string $name name of the bucket
     */
    public abstract function __construct($client, $name);

    /**
     * Store an object
     * @param RiakObject $object
     * @param string $key
     * @throws RiakBadArgumentsException
     * @throws RiakResponseException
     * @throws RiakCommunicationException
     * @return void
     */
    public abstract function putObject($object, $key);

    /**
     * Retrive an object from riak, if the key is not found on server an not found exception is thrown, if the object
     * has siblings an conflicted exception is thrown.
     * @param string $key
     * @throws RiakBadArgumentsException
     * @throws RiakResponseException
     * @throws RiakCommunicationException
     * @throws RiakNotFoundException
     * @throws RiakConflictedObjectException
     * @return RiakObject
     */
    public abstract function getObject($key);

    /**
     * Deletes an object from the server
     * @param RiakObject $object
     * @throws RiakBadArgumentsException
     * @throws RiakResponseException
     * @throws RiakCommunicationException
     * @return void
     */
    public abstract function deleteObject($object);

    /**
     * Apply bucket properties
     * @param $properties RiakBucketProperties
     * @throws RiakBadArgumentsException
     * @throws RiakResponseException
     * @throws RiakCommunicationException
     * @return void
     */
    public abstract function applyProperties($properties);

    /**
     * Fetch current properties
     * @throws RiakBadArgumentsException
     * @throws RiakResponseException
     * @throws RiakCommunicationException
     * @return RiakBucketProperties
     */
    public abstract function fetchProperties();

}