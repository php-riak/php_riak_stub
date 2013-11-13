<?php

namespace Riak;

/**
 * Class ServerInfo
 * @package Riak
 */
class ServerInfo
{
    /**
     * @param Connection $connection
     */
    public function __construct(Connection $connection) {}

    /**
     * @return string
     */
    public function getNode() {}

    /**
     * @return string
     */
    public function getServerVersion() {}
} 