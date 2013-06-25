<?php

/**
 * Class RiakObject
 * Represents a riak object
 */
class RiakObject
{
    /**
     * This objects key
     * @var string
     */
    public $key;

    /**
     * The vclock when this object was read
     * @var string|null
     */
    public $vclock;

    /**
     * Content encoding
     * @var string|null
     */
    public $contentEncoding;

    /**
     * Content type
     * @var string
     */
    public $contentType = "text/plain";

    /**
     * Charset
     * @var string|null
     */
    public $charset;

    /**
     * Raw data from riak
     * @var string|null
     */
    public $data;

    /**
     * Is this object deleted
     * @var bool
     */
    public $isDeleted;

    /**
     * Last modified time stam
     * @var int|null
     */
    public $lastModified;

    /**
     * Last modified in u secs.
     * @var int|null
     */
    public $lastModifiedUSecs;

    /**
     * Associative array containing meta data
     * @var array
     */
    public $metadata;

    /**
     * Associative array containing secondary indexes.
     * Note: requires eleveldb backend
     * @var array
     */
    public $indexes;

    /**
     * Array of links
     * @var Link[]
     */
    public $links;
}