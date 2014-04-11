<?php

namespace Riak\MapReduce\Output;

interface StreamOutput {
    /**
     * Got a response from riak
     * @param Output $response
     * @return void
     */
    public function receive($response);
}
