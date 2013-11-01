<?php

namespace Riak;
use Riak\CRDT\Counter;
use Riak\Input\IndexInput;
use Riak\Input\PutInput;
use Riak\Output\IndexOutput;
use Riak\Output\KeyStreamOutput;
use Riak\Query\IndexQuery;

/**
 * Class Bucket
 * @package Riak
 * Class that handles all functions related to specific bucket
 */
class Bucket
{
    /**
     * Create a new bucket object
     * @param Connection $connection riak connection
     * @param string $name name of the bucket
     */
    public function __construct(Connection $connection, $name) {}

    /**
     * Store an object
     * @param \Riak\Object $object
     * @param Input\PutInput $input optional put request input
     * @throws Exception\BadArgumentsException
     * @throws Exception\UnexpectedResponseException
     * @throws Exception\CommunicationException
     * @return \Riak\Output\PutOutput
     */
    public function put(Object $object, PutInput $input = null) {}

    /**
     * Retrive an object from riak, if the key is not found on server an not found exception is thrown.
     * @param string $key
     * @param Input\GetInput $input optional get request input
     * @throws Exception\BadArgumentsException
     * @throws Exception\UnexpectedResponseException
     * @throws Exception\CommunicationException
     * @throws Exception\NotFoundException
     * @return \Riak\Output\GetOutput
     */
    public function get($key, $input = null) {}

    /**
     * Deletes an object from the server
     * @param \Riak\Object|string $object object or name of object to delete
     * @throws Exception\BadArgumentsException
     * @throws Exception\UnexpectedResponseException
     * @throws Exception\CommunicationException
     * @return void
     */
    public function delete($object) {}

    /**
     * @param string $key
     * @return Counter
     */
    public function counter($key) {}

    /**
     * Apply bucket properties
     * @param $properties BucketPropertyList
     * @throws Exception\BadArgumentsException
     * @throws Exception\UnexpectedResponseException
     * @throws Exception\CommunicationException
     * @return void
     */
    public function setPropertyList($properties) {}

    /**
     * Fetch current properties
     * @throws Exception\BadArgumentsException
     * @throws Exception\UnexpectedResponseException
     * @throws Exception\CommunicationException
     * @return BucketPropertyList
     */
    public function getPropertyList() {}

    /**
     * List all keys in the bucket.
     * WARNING!! do not use this function in production
     * @throws Exception\BadArgumentsException
     * @throws Exception\UnexpectedResponseException
     * @throws Exception\CommunicationException
     * @return string[]
     */
    public function getKeyList() {}

    /**
     * Stream all keys in the bucket
     * WARNING do not use this function in production
     * @param Output\KeyStreamOutput $stream object that will get the stream callbacks
     * @throws Exception\BadArgumentsException
     * @throws Exception\UnexpectedResponseException
     * @throws Exception\CommunicationException
     * @return void
     */
    public function getKeyStream(KeyStreamOutput $stream) {}

    /**
     * Performs an secondary index query, if no $to is provided the query will match exactly $from and nothing else.
     * if both $from and $to is provided the query will return the range.
     * @param string $index name of the index to query, including _int or _bin
     * @param string $from what value to start from [inclusive]
     * @param string $to end value
     * @return string[]
     */
    public function index($index, $from, $to = null) {}

    /**
     * Requires riak 1.4+
     * @param IndexQuery $query
     * @param IndexInput $input
     * @return IndexOutput
     */
    public function indexQuery(IndexQuery $query, IndexInput $input = null) {}

    /**
     * Get name of this bucket
     * @return string
     */
    public function getName() {}

    /**
     * @return Connection
     */
    public function getConnection() {}

}