<?php

namespace Riak\Input;

/**
 * Class PutInput
 * @package Riak\Input
 * Optional extra input for a riak put request.
 */
class PutInput extends Input
{
    /**
     * @var null|int
     */
    protected $w = null;

    /**
     * @var null|int
     */
    protected $dw = null;

    /**
     * @var null|int
     */
    protected $pw = null;

    /**
     * @var null|string
     */
    protected $vClock = null;

    /**
     * @var null|bool
     */
    protected $returnHead = null;

    /**
     * @var null|bool
     */
    protected $returnBody = null;

    /**
     * @var null|bool
     */
    protected $ifNoneMatch = null;

    /**
     * @var null|bool
     */
    protected $ifNotModified = null;

    /** Set DW value
     * @param int $dw
     * @return PutInput
     */
    public function setDW($dw) {}

    /** Get DW value
     * @return int|null
     */
    public function getDW() {}

    /** Set if none match
     * @param bool $ifNoneMatch
     * @return PutInput
     */
    public function setIfNoneMatch($ifNoneMatch) {}

    /** Get if none match
     * @return bool|null
     */
    public function getIfNoneMatch() {}

    /** Set if not modified
     * @param bool $ifNotModified
     * @return PutInput
     */
    public function setIfNotModified($ifNotModified) {}

    /** Get if not modified
     * @return bool|null
     */
    public function getIfNotModified() {}

    /** Set PW value
     * @param int|null $pw
     * @return PutInput
     */
    public function setPW($pw) {}

    /** Get PW value
     * @return int|null
     */
    public function getPw() {}

    /** Set return body
     * @param bool $returnBody
     * @return PutInput
     */
    public function setReturnBody($returnBody) {}

    /** Get return body
     * @return bool|null
     */
    public function getReturnBody() {}

    /** Set return head
     * @param bool $returnHead
     * @return PutInput
     */
    public function setReturnHead($returnHead) {}

    /** Get return head
     * @return bool|null
     */
    public function getReturnHead() {}

    /** Set VClock
     * @param string $vClock
     * @return PutInput
     */
    public function setVClock($vClock) {}

    /** Get VClock
     * @return null|string
     */
    public function getVClock() {}

    /** Set W value
     * @param int $w
     * @return PutInput
     */
    public function setW($w) {}

    /** Get W value
     * @return int|null
     */
    public function getW() {}


}