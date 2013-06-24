<?php
namespace Riak\Search\Output;


/**
 * Class Output
 * @package Riak\Search\Output
 * Holds the output of a riak search
 */
class Output
{
    /**
     * @var float|null
     */
    protected $maxScore = null;

    /**
     * @var null|int
     */
    protected $numFound = null;

    /**
     * @var DocumentOutput[]
     */
    protected $documents = array();

    /** Get returned documents
     * @return \Riak\Search\Output\DocumentOutput[]
     */
    public function getDocuments() {}

    /**
     * Does this output have maxScore set
     * @return bool
     */
    public function hasMaxScore() {}

    /** Get max score
     * @return float|null value if set null otherwise
     */
    public function getMaxScore() {}

    /**
     * Does this output have numFound set
     * @return bool
     */
    public function hasNumFound() {}

    /** Get total number of found documents, not regarding start offset and row limit
     * @return int|null
     */
    public function getNumFound() {}

}