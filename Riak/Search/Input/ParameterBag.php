<?php
namespace Riak\Search\Input;

/**
 * Class ParameterBag
 * @package Riak\Search\Input
 * Extra parameters that can be passed to riak search
 */
class ParameterBag
{
    /**
     * @var null|int
     */
    protected $rowLimit = null;

    /**
     * @var null|int
     */
    protected $start = null;

    /**
     * @var null|string
     */
    protected $sort = null;

    /**
     * @var null|string
     */
    protected $filter = null;

    /**
     * @var null|string
     */
    protected $defaultField = null;

    /**
     * @var null|string
     */
    protected $defaultOperation = null;

    /**
     * @var null|string
     */
    protected $presort = null;

    /**
     * @var null|string[]
     */
    protected $fieldLimits = null;

    /** Set row limit for search
     * @param int $rowLimit
     * @return ParameterBag
     */
    public function setRowLimit($rowLimit) {}

    /** Get current row limit for search
     * @return int|null
     */
    public function getRowLimit() {}

    /** Set start offset for search
     * @param int $start
     * @return ParameterBag
     */
    public function setStartOffset($start) {}

    /** Get start offset for search
     * @return int|null offset or null
     */
    public function getStartOffset() {}

    /** Set sort string for search
     * @param string $sort
     * @return ParameterBag
     */
    public function setSort($sort) {}

    /** Get sort string for search
     * @return null|string or null if not set
     */
    public function getSort() {}

    /** Set filter for search
     * @param string $filter
     * @return ParameterBag
     */
    public function setFilter($filter) {}

    /** Get filter for search
     * @return null|string filter string or null if not set
     */
    public function getFilter() {}

    /** Set default field for search
     * @param string $defaultField
     * @return ParameterBag
     */
    public function setDefaultField($defaultField) {}

    /** Get default field
     * @return null|string field name for null if not set
     */
    public function getDefaultField() {}

    /** Set default operation for search
     * @param string $defaultOperation
     * @return ParameterBag
     */
    public function setDefaultOperation($defaultOperation) {}

    /** Get default operation for search
     * @return null|string default operation if set null if not set
     */
    public function getDefaultOperation() {}

    /** Set presort for this search
     * @param string $presort
     * @return ParameterBag
     */
    public function setPresort($presort) {}

    /** Get presort for this search
     * @return null|string presort or null if not set
     */
    public function getPresort() {}

    /** Limit search to these fields
     * @param \string[] $fieldLimits
     * @return ParameterBag
     */
    public function setFieldLimits($fieldLimits) {}

    /** Get field limits for this search
     * @return null|\string[] limits or null if it has been set
     */
    public function getFieldLimits() {}

}