<?php
namespace Riak\Output;

interface KeyStreamOutput
{
    /**
     * @param string $key received a key from riak
     * @return void
     */
    public function process($key);
}