<?php

namespace Riak\MapReduce\Input;

/**
 * Class KeyListInput
 * @package Riak\MapReduce\Input
 * Bucket/keylist input class for a mapreduce query.
 * This class uses an input list that will be expanded when the query is run eg.:
 * ["bucket" => ["key1", "key2"]] will be expanded to ["bucket", "key1"],["bucket", "key2"] when executed.
 */
class KeyListInput extends Input
{
    /** Associative array with buckets => keys[]
     * @var array
     */
    protected $inputList;

    /**
     * Create a KeyListInput, input should be an array with ["bucket" => "key", "bucket2" => "key2"] or
     * ["bucket" => ["key1", "key2"]]
     * @param array $bucketKeys
     */
    public function __construct($bucketKeys) { }

    /**
     * Add bucket/key inputs to the current list, $bucketKeys must be an array with ["bucket" => "key", "bucket2" => "key2"] or
     * ["bucket" => ["key1", "key2"]]
     * @param array $bucketKeys
     * @return KeyListInput
     */
    public function addArray($bucketKeys) {}

    /**
     * Add a single bucket/key to the current list of inputs
     * @param string $bucket
     * @param string $key
     * @return KeyListInput
     */
    public function addSingle($bucket, $key) {}

    /** Should return the values to be inserted in inputs part of a mapreduce query, the return value will be
     * inserted directly as ´inputs´ and converted to json automatically by the MapReduce class.
     * @return mixed
     */
    function getValue() {}
}