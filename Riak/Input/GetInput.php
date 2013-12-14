<?php

namespace Riak\Input;

/**
 * Class GetInput
 * @package Riak\Input
 * Optional extra input for a riak get request.
 */
class GetInput extends Input
{
    /**
     * @var int|null
     */
    protected $r = null;

    /**
     * @var int|null
     */
    protected $pr = null;

    /**
     * @var bool|null
     */
    protected $basicQuorum = null;

    /**
     * @var null|bool
     */
    protected $notFoundOk = null;

    /**
     * @var null|string
     */
    protected $ifModifiedVClock = null;

    /**
     * @var null|bool
     */
    protected $returnHead = null;

    /**
     * @var null|bool
     */
    protected $deletedVClock = null;

    /** Set basic quorum
     * @param bool $basicQuorum
     * @return GetInput
     */
    public function setBasicQuorum($basicQuorum) {}

    /** Get basic quorum
     * @return bool|null
     */
    public function getBasicQuorum() {}

    /** Set return deleted vclock
     * @param bool $deletedVClock
     * @return GetInput
     */
    public function setReturnDeletedVClock($deletedVClock) {}

    /** Get return deleted vclock
     * @return bool|null
     */
    public function getReturnDeletedVClock() {}

    /** Set if modified vclock
     * @param string $ifModifiedVClock
     * @return GetInput
     */
    public function setIfModifiedVClock($ifModifiedVClock) {}

    /** Get if modified vlcock
     * @return null|string
     */
    public function getIfModifiedVClock() {}

    /** Set not found ok
     * @param bool $notFoundOk
     * @return GetInput
     */
    public function setNotFoundOk($notFoundOk) {}

    /** Get not found ok value
     * @return bool|null
     */
    public function getNotFoundOk() {}

    /** Set PR value
     * @param int $pr
     * @return GetInput
     */
    public function setPr($pr) {}

    /** Get PR value
     * @return int|null
     */
    public function getPr() {}

    /** Set R value
     * @param int $r
     * @return GetInput
     */
    public function setR($r) {}

    /** Get R value
     * @return int|null
     */
    public function getR() {}

    /** Set return head
     * @param bool $returnHead
     * @return GetInput
     */
    public function setReturnHead($returnHead) {}

    /** Get return head
     * @return bool|null
     */
    public function getReturnHead() {}

}