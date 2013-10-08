<?php

namespace Riak;
use Riak\Property\CommitHookList;
use Riak\Property\ModuleFunction;
use Riak\Property\ReplicationMode\ReplicationMode;

/**
 * Class BucketPropertyList
 * @package Riak
 * Properties for a bucket
 */
class BucketPropertyList
{

    /**
     * @param $nVal int n value
     * @param $allowMult bool allow mults
     */
    public function __construct($nVal = null, $allowMult = null) {}

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

    /** IMPORTANT Only supported by riak 1.4+
     * Set last write wins
     * @param boolean $lastWriteWins
     * @return BucketPropertyList
     */
    public function setLastWriteWins($lastWriteWins) {}

    /** IMPORTANT Only supported by riak 1.4+
     * Get last write wins
     * @return boolean|null
     */
    public function getLastWriteWins() {}

    /** IMPORTANT Only supported by riak 1.4+
     * Set old vclock value
     * @param int $oldVClock
     * @return BucketPropertyList
     */
    public function setOldVClock($oldVClock) {}

    /** IMPORTANT Only supported by riak 1.4+
     * @return int|null
     */
    public function getOldVClock() {}

    /** IMPORTANT Only supported by riak 1.4+
     * Set young vclock value
     * @param int $youngVClock
     * @return BucketPropertyList
     */
    public function setYoungVClock($youngVClock) {}

    /** IMPORTANT Only supported by riak 1.4+
     * @return int|null
     */
    public function getYoungVClock() {}

    /** IMPORTANT Only supported by riak 1.4+
     * Set small vclock value
     * @param int $smallVClock
     * @return BucketPropertyList
     */
    public function setSmallVClock($smallVClock) {}

    /** IMPORTANT Only supported by riak 1.4+
     * @return int|null
     */
    public function getSmallVClock() {}

    /** IMPORTANT Only supported by riak 1.4+
     * Set big vclock value
     * @param int $smallVClock
     * @return BucketPropertyList
     */
    public function setBigVClock($smallVClock) {}

    /** IMPORTANT Only supported by riak 1.4+
     * @return int|null
     */
    public function getBigVClock() {}

    /** IMPORTANT Only supported by riak 1.4+
     * Set R value
     * @return BucketPropertyList
     * @param int $r
     */
    public function setR($r) {}

    /** IMPORTANT Only supported by riak 1.4+
     * @return int|null
     */
    public function getR() {}

    /** IMPORTANT Only supported by riak 1.4+
     * Set PR value
     * @param int $r
     * @return BucketPropertyList
     */
    public function setPR($r) {}

    /** IMPORTANT Only supported by riak 1.4+
     * @return int|null
     */
    public function getPR() {}

    /** IMPORTANT Only supported by riak 1.4+
     * Set W value
     * @param int $dw
     * @return BucketPropertyList
     */
    public function setW($dw) {}

    /** IMPORTANT Only supported by riak 1.4+
     * @return int|null
     */
    public function getW() {}

    /** IMPORTANT Only supported by riak 1.4+
     * Set DW value
     * @param int $dw
     * @return BucketPropertyList
     */
    public function setDW($dw) {}

    /** IMPORTANT Only supported by riak 1.4+
     * @return int|null
     */
    public function getDW() {}

    /** IMPORTANT Only supported by riak 1.4+
     * Set PW value
     * @param int $dw
     * @return BucketPropertyList
     */
    public function setPW($dw) {}

    /** IMPORTANT Only supported by riak 1.4+
     * @return int|null
     */
    public function getPW() {}

    /** IMPORTANT Only supported by riak 1.4+
     * Set RW value
     * @param int $dw
     * @return BucketPropertyList
     */
    public function setRW($dw) {}

    /** IMPORTANT Only supported by riak 1.4+
     * @return int|null
     */
    public function getRW() {}

    /** IMPORTANT Only supported by riak 1.4+
     * @param bool $basicQuorum
     * @return BucketPropertyList
     */
    public function setBasicQuorum($basicQuorum) {}

    /** IMPORTANT Only supported by riak 1.4+
     * @return bool|null
     */
    public function getBasicQuorum() {}

    /** IMPORTANT Only supported by riak 1.4+
     * @param bool $notFoundOk
     * @return BucketPropertyList
     */
    public function setNotFoundOk($notFoundOk) {}

    /** IMPORTANT Only supported by riak 1.4+
     * @return bool|null
     */
    public function getNotFoundOk() {}

    /** IMPORTANT Only supported by riak 1.4+
     * @param bool $search
     * @return BucketPropertyList
     */
    public function setSearchEnabled($search) {}

    /** IMPORTANT Only supported by riak 1.4+
     * @return bool|null
     */
    public function getSearchEnabled() {}

    /** IMPORTANT Only supported by riak 1.4+
     * @param string $backend
     * @return BucketPropertyList
     */
    public function setBackend($backend) {}

    /** IMPORTANT Only supported by riak 1.4+
     * @return string|null
     */
    public function getBackend() {}

    /** IMPORTANT Only supported by riak 1.4+
     * @param CommitHookList $preCommitHookList
     * @return BucketPropertyList
     */
    public function setPreCommitHookList(CommitHookList $preCommitHookList) {}

    /** IMPORTANT Only supported by riak 1.4+
     * @return CommitHookList|null
     */
    public function getPreCommitHookList() {}

    /** IMPORTANT Only supported by riak 1.4+
     * @param CommitHookList $postCommitHookList
     * @return BucketPropertyList
     */
    public function setPostCommitHookList(CommitHookList $postCommitHookList) {}

    /** IMPORTANT Only supported by riak 1.4+
     * @return CommitHookList|null
     */
    public function getPostCommitHookList() {}

    /** IMPORTANT Only supported by riak 1.4+
     * @param ModuleFunction $linkFun
     */
    public function setLinkFun(ModuleFunction $linkFun) {}

    /** IMPORTANT Only supported by riak 1.4+
     * @return ModuleFunction|null
     */
    public function getLinkFun() {}

    /** IMPORTANT Only supported by riak 1.4+
     * @param ModuleFunction $cHashKeyFun
     */
    public function setCHashKeyFun(ModuleFunction $cHashKeyFun) {}

    /** IMPORTANT Only supported by riak 1.4+
     * @return ModuleFunction|null
     */
    public function getCHashKeyFun() {}

    /** IMPORTANT Only supported by riak 1.4+
     * @param ReplicationMode $replicationMode
     */
    public function setReplicationMode(ReplicationMode $replicationMode) {}

    /** IMPORTANT Only supported by riak 1.4+
     * @return ReplicationMode|null
     */
    public function getReplicationMode() {}

}