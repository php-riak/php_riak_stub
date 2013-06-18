<?php

/**
 * Class RiakMrFunction
 */
abstract class RiakMrFunction {

    /**
     * Converts this into into an array, that will be converted to json by the RiakMapreduce class.
     * @return array
     */
    public abstract function toArray();

}