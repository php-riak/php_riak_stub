<?php
namespace Riak\Output;

/**
 * Class GetOutput
 * @package Riak\Output
 */
class GetOutput extends Output
{
    /**
     * @var bool|null
     */
    protected $unchanged;

    /**
     * Content was unchanged
     * @return bool
     */
    public function isUnchanged() {}

}