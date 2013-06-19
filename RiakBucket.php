<?php

/**
 * Class RiakBucket
 * Class that handles all functions related to specific bucket
 */
class RiakBucket {


    /**
     * @var int default w value to use, defaults to the value of RiakClient->$w
     */
    public $w;

    /**
     * @var int default dw value to use, defaults to the value of RiakClient->$dw
     */
    public $dw;

    /**
     * @var int default pw value to use, defaults to the value of RiakClient->$pw
     */
    public $pw;

    /**
     * @var int default r value to use, defaults to the value of RiakClient->$r
     */
    public $r;

    /**
     * @var int default rw value to use, defaults to the value of RiakClient->$rw
     */
    public $rw;

    /**
     * @var int default pr value to use, defaults to the value of RiakClient->$pr
     */
    public $pr;

    /**
     * Create a new bucket object
     * @param RiakClient $client riak client
     * @param string $name name of the bucket
     */
    public function __construct($client, $name) {}

    /**
     * Store an object
     * @param RiakObject $object
     * @param RiakPutRequestConfiguration $config request specific configuration
     * @throws RiakBadArgumentsException
     * @throws RiakResponseException
     * @throws RiakCommunicationException
     * @return RiakObject
     */
    public function put($object, $config = null) {}

    /**
     * Retrive an object from riak, if the key is not found on server an not found exception is thrown, if the object
     * has siblings an conflicted exception is thrown.
     * @param string $key
     * @param RiakGetRequestConfiguration $config request specific configuration
     * @throws RiakBadArgumentsException
     * @throws RiakResponseException
     * @throws RiakCommunicationException
     * @throws RiakNotFoundException
     * @throws RiakConflictedObjectException
     * @return RiakObject
     */
    public function get($key, $config = null) {}

    /**
     * Deletes an object from the server
     * @param RiakObject $object
     * @throws RiakBadArgumentsException
     * @throws RiakResponseException
     * @throws RiakCommunicationException
     * @return void
     */
    public function delete($object) {}

    /**
     * Apply bucket properties
     * @param $properties RiakBucketProperties
     * @throws RiakBadArgumentsException
     * @throws RiakResponseException
     * @throws RiakCommunicationException
     * @return void
     */
    public function applyProperties($properties) {}

    /**
     * Fetch current properties
     * @throws RiakBadArgumentsException
     * @throws RiakResponseException
     * @throws RiakCommunicationException
     * @return RiakBucketProperties
     */
    public function fetchProperties() {}

    /**
     * List all keys in the bucket.
     * WARNING do not use this function in production
     * @throws RiakBadArgumentsException
     * @throws RiakResponseException
     * @throws RiakCommunicationException
     * @return string[]
     */
    public function listKeys() {}

    /**
     * Stream all keys in the bucket
     * WARNING do not use this function in production
     * @param RiakMrStreamer $streamer object that will get the stream callbacks
     * @throws RiakBadArgumentsException
     * @throws RiakResponseException
     * @throws RiakCommunicationException
     * @return void
     */
    public function streamKeys($streamer) {}

    /**
     * Performs an secondary index query, if no $to is provided the query will match exactly $from and nothing else.
     * if both $from and $to is provided the query will return the range.
     * @param string $index name of the index to query, including _int or _bin
     * @param string $from what value to start from [inclusive]
     * @param string $to end value
     * @return string[]
     */
    public function indexQuery($index, $from, $to = null) {}

}