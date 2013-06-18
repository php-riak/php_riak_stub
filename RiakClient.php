<?php

/**
 * Class RiakClient handles a connection to Riak
 */
class RiakClient {

    /**
     * TODO This should be made private as it should not be changed after construction
     * @var string riak host
     */
    public $host;

    /**
     * TODO This should be made private as it should not be changed after construction
     * @var int riak port number
     */
    public $port;

    /**
     * @var int default w value to use, when not overridden in RiakBucket.
     */
    public $w;

    /**
     * @var int default dw value to use, when not overridden in RiakBucket.
     */
    public $dw;

    /**
     * @var int default pw value to use, when not overridden in RiakBucket.
     */
    public $pw;

    /**
     * @var int default r value to use, when not overridden in RiakBucket.
     */
    public $r;

    /**
     * @var int default rw value to use, when not overridden in RiakBucket.
     */
    public $rw;

    /**
     * @var int default pr value to use, when not overridden in RiakBucket.
     */
    public $pr;


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