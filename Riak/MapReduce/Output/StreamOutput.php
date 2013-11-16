<?php

namespace Riak\MapReduce\Output;

interface StreamOutput {
    /**
     * Got a response from riak
     * WARNING!! If you perform operations on riak in this callback you need to do it
     * on a different connection than the one running the mapreduce.
     * See https://github.com/TriKaspar/php_riak/issues/52 for more info.
     * @param Output $response
     * @return void
     */
    public function receive(Output $response);
}
