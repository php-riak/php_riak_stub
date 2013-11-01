<?php

namespace Riak\CRDT;


use Riak\Bucket;
use Riak\Connection;
use Riak\CRDT\Input\PutInput;
use Riak\Input\GetInput;

/**
 * Class Counter
 * @package Riak\Crdt
 */
class Counter {

    /**
     * @param Connection $connection
     * @param Bucket $bucket
     * @param string $key
     */
    public function __construct(Connection $connection, Bucket $bucket, $key) {}

    /**
     * @param int $amount
     * @param Input\PutInput $input
     */
    public function increment($amount, PutInput $input = null) {}

    /**
     * @param int $amount
     * @param Input\PutInput $input
     * @return int
     */
    public function incrementAndGet($amount, PutInput $input = null) {}

    /**
     * @param \Riak\Input\GetInput $input
     * @return int
     */
    public function get(GetInput $input = null) {}

} 