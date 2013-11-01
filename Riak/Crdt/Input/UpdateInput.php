<?php

namespace Riak\CRDT\Input;

/**
 * Class IncrementInput
 * @package Riak\CRDT\Input
 */
class UpdateInput {
    /** Set W value
     * @param int $w
     * @return UpdateInput
     */
    public function setW($w) {}

    /** Get W value
     * @return int|null
     */
    public function getW() {}

    /** Set DW value
     * @param int $dw
     * @return UpdateInput
     */
    public function setDW($dw) {}

    /** Get DW value
     * @return int|null
     */
    public function getDW() {}

    /** Set PW value
     * @param int|null $pw
     * @return UpdateInput
     */
    public function setPW($pw) {}

    /** Get PW value
     * @return int|null
     */
    public function getPw() {}
} 