<?php

/**
 * Class RiakStats
 * Various statistics
 */
abstract class RiakStats
{
    /**
     * Number of currently active connections
     * @return int
     */
    public static function activeConnections() {}

    /**
     * Number of currently active persistent connections
     * @return int
     */
    public static function activePersistentConnections() {}

    /**
     * How many times did we riack clients reconnect.
     * When riack returns an error a connection will be automatically reconnected, if persistent connections are
     * not used very often they will reconnect after timeout as well.
     * Keep a close look on this number and monitor your code closely if it rises fast.
     * @return int
     */
    public static function getNumReconnects() {}
}