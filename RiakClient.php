<?php

/**
 * Class RiakClient handles a connection to Riak
 */
class RiakClient {

    /**
     * Creates a new Riak client
     * @param string $host server hostname
     * @param int $port server port
     * @throws RiakConnectionException
     */
    public function __construct($host, $port=8087) {}

    /**
     * Ping the Riak server, if no exception is thrown ping was successfull
     * @throws RiakCommunicationException
     * @throws RiakResponseException
     * @return void
     */
    public function ping() {}
}