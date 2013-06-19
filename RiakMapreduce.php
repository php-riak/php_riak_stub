<?php

/**
 * Class RiakMapreduce
 * Riak mapreduce handler
 */
class RiakMapreduce {

    /**
     * @param RiakClient $client
     */
    public function __construct(RiakClient $client) {}

    /**
     * Add a new phase to this map reduce job, atleast one phase needs to be added before a mapreduce query can succeed
     * @param RiakMrPhase $phase
     */
    public function addPhase(RiakMrPhase $phase) {}

    /**
     * Set mapreduce input, needs to be set for a mapreduce query to succeed
     * @param RiakMrInput $input
     */
    public function setInput(RiakMrInput $input) {}

    /**
     * Runs the mapreduce query and either returns the results as an array of RiakMrResult or streams it to supplied $streamer
     * @param null $streamer
     * @return array|null
     * @throws RiakBadArgumentsException
     * @throws RiakResponseException
     * @throws RiakCommunicationException
     * @return RiakObject
     */
    public function run($streamer = null) {}

    /**
     * Get the current mapreduce query as an array, this is mostly useful when debugging failing mr queries
     * @return array
     * @throws RiakBadArgumentsException if input or phase has not been set
     */
    public function toArray() {}

    /**
     * Get the current mapreduce query as an json string, this is mostly useful when debugging failing mr queries
     * @return string
     * @throws RiakBadArgumentsException if input or phase has not been set
     */
    public function toJson() {}

}