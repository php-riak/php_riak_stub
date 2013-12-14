<?php

namespace Riak\Input;


use Riak\Output\ConflictResolver;

/**
 * Class GetResolverInput
 * Input parameter class for ->get function that includes a conflict resolver.
 * @package Riak\Input
 */
class GetResolverInput extends GetInput {

    /**
     * @param ConflictResolver $conflictResolver
     */
    public function __construct(ConflictResolver $conflictResolver) {}

    /**
     * @return ConflictResolver
     */
    public function getConflictResolver() {}

} 