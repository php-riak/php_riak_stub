<?php
namespace Riak;

/**
 * Class Connection
 * @package Riak
 * Handles a connection to Riak
 */
class Connection
{

    /**
     * Creates a new Riak connection
     * @param string $host server hostname
     * @param int $port server port
     * @throws Exception\ConnectionException
     */
    public function __construct($host, $port=8087) {}

    /**
     * Ping the Riak server, if no exception is thrown ping was successfull
     * @throws Exception\CommunicationException
     * @throws Exception\UnexpectedResponseException
     * @return void
     */
    public function ping() {}

    /**
     * Get server host name
     * @return string
     */
    public function getHost() {}

    /**
     * Get server port number
     * @return int
     */
    public function getPort() {}

    /**
     * Get a named bucket, creates a new Bucket object if no bucket exist with given name.
     * @param string $name
     * @return Bucket
     */
    public function getBucket($name) {}

    /**
     * @return ServerInfo
     */
    public function getServerInfo() {}
}