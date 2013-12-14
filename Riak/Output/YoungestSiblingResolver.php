<?php

namespace Riak\Output;


use Riak\ObjectList;

/**
 * Class YoungestSiblingResolver
 * Conflict resolver that will just take the object with the newest timestamp and throw the rest away.
 * @package Riak\Output
 */
class YoungestSiblingResolver implements ConflictResolver
{

    /**
     * Resolve or merge the conflicting objects and return one that should be store back into riak.
     * @param ObjectList $objects
     * @return Object|null
     */
    public function resolve(ObjectList $objects) {}
}