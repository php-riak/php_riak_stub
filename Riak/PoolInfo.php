<?php

namespace Riak;

/**
 * Class PoolInfo
 * @package Riak
 * Various statistics
 */
class PoolInfo
{
    /**
     * Number of currently active connections
     * @return int
     */
    public static function getNumActiveConnection() {}

    /**
     * Number of currently active persistent connections
     * @return int
     */
    public static function getNumActivePersistentConnection() {}

    /**
     * How many times did we riack clients reconnect.
     * When riack returns an error a connection will be automatically reconnected, if persistent connections are
     * not used very often they will reconnect after timeout as well.
     * Keep a close look on this number and monitor your code closely if it rises fast.
     * @return int
     */
    public static function getNumReconnect() {}
}