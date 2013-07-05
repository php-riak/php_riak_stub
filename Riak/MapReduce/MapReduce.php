<?php

namespace Riak\MapReduce;

/**
 * Class MapReduce
 * @package Riak\MapReduce
 * Riak MapReduce handler
 */
class MapReduce
{
    /**
     * @param \Riak\Connection $connection
     */
    public function __construct(\Riak\Connection $connection) {}

    /**
     * Add a new phase to this map reduce job, atleast one phase needs to be added before a mapreduce query can succeed
     * @param \Riak\MapReduce\Phase\Phase $phase
     */
    public function addPhase(\Riak\MapReduce\Phase\Phase $phase) {}

    /**
     * Set mapreduce input, needs to be set for a mapreduce query to succeed
     * @param \Riak\MapReduce\Input\Input $input
     */
    public function setInput(\Riak\MapReduce\Input\Input $input) {}

    /**
     * Runs the mapreduce query and either returns the results as an array of Output or streams it to supplied $streamer
     * @param null $streamer
     * @return array|null
     * @throws \Riak\Exception\BadArgumentsException
     * @throws \Riak\Exception\UnexpectedResponseException
     * @throws \Riak\Exception\CommunicationException
     * @return \Riak\MapReduce\Output\Output[]|null
     */
    public function run($streamer = null) {}

    /**
     * Get the current mapreduce query as an array, this is mostly useful when debugging failing mr queries
     * @return array
     * @throws \Riak\Exception\BadArgumentsException if input or phase has not been set
     */
    public function toArray() {}

    /**
     * Get the current mapreduce query as an json string, this is mostly useful when debugging failing mr queries
     * @return string
     * @throws \Riak\Exception\BadArgumentsException if input or phase has not been set
     */
    public function toJson() {}

}