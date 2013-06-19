<?php

interface RiakMrStreamer {
    /**
     * Got a response from riak
     * @param RiakMrResult $response
     * @return void
     */
    public function receive(RiakMrResult $response);
}