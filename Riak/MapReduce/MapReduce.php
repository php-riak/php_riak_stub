<?php

namespace Riak\MapReduce;
use Riak\Connection;
use Riak\Exception\BadArgumentsException;
use Riak\Exception\CommunicationException;
use Riak\Exception\UnexpectedResponseException;
use Riak\MapReduce\Input\Input;
use Riak\MapReduce\Output\Output;
use Riak\MapReduce\Phase\Phase;

/**
 * Class MapReduce
 * @package Riak\MapReduce
 * Riak MapReduce handler
 */
class MapReduce
{
    /**
     * @param Connection $connection
     */
    public function __construct(Connection $connection) {}

    /**
     * Add a new phase to this map reduce job, atleast one phase needs to be added before a mapreduce query can succeed
     * @param Phase $phase
     */
    public function addPhase(Phase $phase) {}

    /**
     * Set mapreduce input, needs to be set for a mapreduce query to succeed
     * @param Input $input
     */
    public function setInput(Input $input) {}

    /**
     * Runs the mapreduce query and either returns the results as an array of Output or streams it to supplied $streamer
     * @param null $streamer
     * @return array|null
     * @throws BadArgumentsException
     * @throws UnexpectedResponseException
     * @throws CommunicationException
     * @return Output[]|null
     */
    public function run($streamer = null) {}

    /**
     * Get the current mapreduce query as an array, this is mostly useful when debugging failing mr queries
     * @return array
     * @throws BadArgumentsException if input or phase has not been set
     */
    public function toArray() {}

    /**
     * Get the current mapreduce query as an json string, this is mostly useful when debugging failing mr queries
     * @return string
     * @throws BadArgumentsException if input or phase has not been set
     */
    public function toJson() {}

}