<?php
namespace Riak\Output;

interface KeyStreamOutput
{
    /**
     * WARNING!! If you perform operations on riak in this callback you need to do it
     * on a different connection than the one running the key list.
     * See https://github.com/TriKaspar/php_riak/issues/52 for more info.
     * @param string $key received a key from riak
     * @return void
     */
    public function process($key);
}