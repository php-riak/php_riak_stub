<?php

namespace Riak\CRDT;


use Riak\Bucket;
use Riak\Connection;
use Riak\CRDT\Input\UpdateInput;
use Riak\Input\GetInput;

/**
 * Class Counter
 * @package Riak\Crdt
 */
class Counter {

    /**
     * @param Bucket $bucket
     * @param string $key
     */
    public function __construct(Bucket $bucket, $key) {}

    /**
     * @param int $amount
     * @param Input\UpdateInput $input
     */
    public function increment($amount, UpdateInput $input = null) {}

    /**
     * @param int $amount
     * @param Input\UpdateInput $input
     * @return int
     */
    public function incrementAndGet($amount, UpdateInput $input = null) {}

    /**
     * @param \Riak\Input\GetInput $input
     * @return int
     */
    public function get(GetInput $input = null) {}

} 