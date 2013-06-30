<?php

namespace Riak;

/**
 * Class BucketPropertyList
 * @package Riak
 * Properties for a bucket
 */
class BucketPropertyList
{
    /**
     * @var bool allow mults in bucket
     */
    private $allowMult;

    /**
     * @var int n value for bucket
     */
    private $nVal;

    /**
     * @param $nVal int n value
     * @param $allowMult bool allow mults
     */
    public function __construct($nVal, $allowMult) {}

    /** Set allow mult for bucket
     * @param boolean $allowMult
     * @return BucketPropertyList
     */
    public function setAllowMult($allowMult) {}

    /** Get allowmult
     * @return boolean
     */
    public function getAllowMult(){}

    /** Set n-value for bucket
     * @param int $nVal
     * @return BucketPropertyList
     */
    public function setNValue($nVal) {}

    /** Get n-value for bucket
     * @return int
     */
    public function getNValue() {}


}