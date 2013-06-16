<?php

/**
 * Class RiakLink
 * Link to object in Riak
 */
class RiakLink {

    /**
     * @param string $tag Tag of this link
     * @param string $bucket name of the bucket this link points to
     * @param string $key key of the object this link points to.
     */
    public function __construct($tag, $bucket, $key) {}

    /**
     * Tag of this link
     * @var string
     */
    public $tag;

    /**
     * Bucket name
     * @var string
     */
    public $bucket;

    /**
     * Key
     * @var string
     */
    public $key;

}