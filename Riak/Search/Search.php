<?php
namespace Riak\Search;

use Riak\Search\Input\ParameterBag;
use Riak\Search\Output\Output;

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
     * @param \Connection $client
     */
    public function __construct(\Connection $client) {}

    /**
     * Performs a riak search
     * @param string $index name of the index to search, usually the bucket name
     * @param string $query the search query
     * @param ParameterBag $parameters
     * @throws \RiakBadArgumentsException
     * @throws \RiakResponseException
     * @throws \RiakCommunicationException
     * @return Output
     */
    public function search($index, $query, $parameters=null) {}

}