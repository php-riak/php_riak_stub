<?php

namespace Riak\CRDT\Input;

/**
 * Class GetInput
 * @package Riak\CRDT\Input
 */
class GetInput {

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

    /** Set basic quorum
     * @param bool $basicQuorum
     * @return GetInput
     */
    public function setBasicQuorum($basicQuorum) {}

    /** Get basic quorum
     * @return bool|null
     */
    public function getBasicQuorum() {}

    /** Set not found ok
     * @param bool $notFoundOk
     * @return GetInput
     */
    public function setNotFoundOk($notFoundOk) {}

    /** Get not found ok value
     * @return bool|null
     */
    public function getNotFoundOk() {}

} 