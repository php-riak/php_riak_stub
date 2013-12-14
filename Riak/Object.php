<?php

namespace Riak;

/**
 * Class Object
 * @package Riak
 * Represents a riak object
 */
class Object
{
    /**
     * Creates a new object
     * @param string $key
     */
    public function __construct($key = null) {}

    /**
     * Get this objects key
     * @return string
     */
    public function getKey() {}

    /**
     * Set this objects key
     * @param $key
     * @return Object
     */
    public function setKey($key) {}

    /**
     * Get content of this object
     * @return string|null
     */
    public function getContent() {}

    /**
     * Set content of this object
     * @param string $content
     * @return Object
     */
    public function setContent($content) {}

    /**
     * Add an index
     * @param string $name name of the index must end with _bin or _int
     * @param string|int $value index value
     * @return Object
     */
    public function addIndex($name, $value = null) {}

    /**
     * Add a link
     * @param Link $link
     * @return Object
     */
    public function addLink(Link $link) {}

    /**
     * Add metadata
     * @param string $name metadata name
     * @param string $value metadata value
     * @return Object
     */
    public function addMetadata($name, $value = null) {}

    /**
     * @param string $charset
     * @return Object
     */
    public function setCharset($charset) {}

    /**
     * Get charset
     * @return string|null charset name or null if it is not set
     */
    public function getCharset() {}

    /**
     * @param string $contentType
     * @return Object
     */
    public function setContentType($contentType) {}

    /**
     * @return string|null content type or null if it is not set
     */
    public function getContentType() {}

    /**
     * @param string $contentEncoding
     * @return Object
     */
    public function setContentEncoding($contentEncoding) {}

    /**
     * @return string|null content encoding or null if it is not set
     */
    public function getContentEncoding() {}

    /**
     * @return string|null string with vtag or null if it is not set
     */
    public function getVTag() {}

    /**
     * @return bool|null
     */
    public function isDeleted() {}

    /**
     * Get an associative array with index/values
     * @return array
     */
    public function getIndexMap() {}

    /**
     * Get an associative array with metadata name/values
     * @return array
     */
    public function getMetadataMap() {}

    /**
     * @return Link[]
     */
    public function getLinkList() {}

    /**
     * @return string|null
     */
    public function getVClock() {}

    /**
     * @param string $vclock
     * @return string|null
     */
    public function setVClock($vclock) {}

    /** Get last modified if set by riak
     * @return int|null
     */
    public function getLastModified() {}

    /** Get last modified usec if set by riak
     * @return int|null
     */
    public function getLastModifiedUSecs() {}

}