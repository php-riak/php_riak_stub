<?php

interface RiakKeyStreamer
{
    /**
     * @param string $key received a key from riak
     * @return void
     */
    public function key($key);
}