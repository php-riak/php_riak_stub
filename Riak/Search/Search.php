<?php
namespace Riak\Search;

/**
 * Class Search
 * @package Riak\Search
 * Main class for performing riak search
 */
class Search
{

    /**
     * @var \Connection
     */
    protected $client;

    /** Create a new riak search
     * @param \Riak\Connection $connection
     */
    public function __construct(\Riak\Connection $connection) {}

    /**
     * Performs a riak search
     * @param string $index name of the index to search, usually the bucket name
     * @param string $query the search query
     * @param \Riak\Search\Input\ParameterBag $parameters
     * @throws \Riak\Exception\BadArgumentsException
     * @throws \Riak\Exception\UnexpectedResponseException
     * @throws \Riak\Exception\CommunicationException
     * @return \Riak\Search\Output\Output
     */
    public function search($index, $query, $parameters=null) {}

}