<?php
/*
   Copyright 2013: Kaspar Bach Pedersen

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/

namespace Riak\Query;

/**
 * Class IndexQuery
 * @package Riak\Query
 */
class IndexQuery {
    /**
     * @param string $name
     * @return IndexQuery
     */
    public function setName($name) {}

    /**
     * @return string|null
     */
    public function getName() {}

    /**
     * @param string $value
     * @return IndexQuery
     */
    public function setExactValue($value) {}

    /**
     * @return string|null
     */
    public function getExactValue() {}

    /**
     * @param string $start
     * @param string $end
     * @return IndexQuery
     */
    public function setRangeValue($start, $end) {}

    /**
     * @return string[]|null
     */
    public function getRangeValue() {}

    /**
     * @return bool
     */
    public function isRangeQuery() {}

} 