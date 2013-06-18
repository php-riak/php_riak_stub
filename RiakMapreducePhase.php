<?php

/**
 * Class RiakMapreducePhase
 * A mapreduce phase like map or reduce
 */
class RiakMapreducePhase {

    /**
     * @param string $type which phase eg. reduce or map
     * @param RiakMrFunction $function
     * @param bool $keep
     * @param array $arguments array of arguments to pass to the phase
      */
    public function __construct($type, $function, $keep = false, $arguments=array()) {}

    /**
     * Converts this phase into an array, that will be converted to json.
     * @return array
     */
    public function toArray() {}

}