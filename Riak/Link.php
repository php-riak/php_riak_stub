<?php

namespace Riak;

/**
 * Class Link
 * @package Riak
 * Link to object in Riak
 */
class Link
{

    /**
     * Tag of this link
     * @var string
     */
    private $tag;

    /**
     * Bucket name
     * @var string
     */
    private $bucket;

    /**
     * Key
     * @var string
     */
    private $key;

    /**
     * @param string $tag Tag of this link
     * @param string $bucket name of the bucket this link points to
     * @param string $key key of the object this link points to.
     */
    public function __construct($tag, $bucket, $key) {}

    /**
     * @return string
     */
    public function getBucketName() {}

    /**
     * @return string
     */
    public function getKey() {}

    /**
     * @return string
     */
    public function getTag() {}


}