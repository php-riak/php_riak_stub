<?php

namespace Riak\MapReduce\Input;

/**
 * Class RiakMrInputKeyDataList
 * Mapreduce input class containing a list of bucket, key and data´s
 */
class KeyDataListInput extends Input
{

    /**
     * array of [bucket, key, data]
     * @var array
     */
    protected $inputList;

    /** Add a bucket/key/data set to input
     * @param string|\Bucket $bucket bucket or bucket name
     * @param string|\Object $key key
     * @param string $data
     * @return KeyDataListInput
     */
    public function add($bucket, $key, $data) {}

    /**
     * Should return the values to be inserted in inputs part of a mapreduce query, the return value will be
     * inserted directly as ´inputs´ and converted to json automatically by the RiakMapreduce class.
     * @return mixed
     */
    public function getValue() {}

}