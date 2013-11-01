<?php

namespace Riak\CRDT\Input;

/**
 * Class IncrementInput
 * @package Riak\CRDT\Input
 */
class PutInput {
    /** Set W value
     * @param int $w
     * @return PutInput
     */
    public function setW($w) {}

    /** Get W value
     * @return int|null
     */
    public function getW() {}

    /** Set DW value
     * @param int $dw
     * @return PutInput
     */
    public function setDW($dw) {}

    /** Get DW value
     * @return int|null
     */
    public function getDW() {}

    /** Set PW value
     * @param int|null $pw
     * @return PutInput
     */
    public function setPW($pw) {}

    /** Get PW value
     * @return int|null
     */
    public function getPw() {}
} 