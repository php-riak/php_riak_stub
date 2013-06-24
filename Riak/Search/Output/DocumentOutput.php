<?php
namespace Riak\Search\Output;

/**
 * Class DocumentOutput
 * @package Riak\Search\Output
 * Represents a single document found by riak search
 */
class DocumentOutput
{
    /**
     * @var array
     */
    private $fields = array();

    /** Get the associative array of field names and values.
     * @return array
     */
    public function getFields() {}

}