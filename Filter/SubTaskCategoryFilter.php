<?php

namespace Kanboard\Plugin\Subtaskdate\Filter;

use Kanboard\Core\Filter\FilterInterface;
use Kanboard\Filter\BaseDateFilter;
use Kanboard\Model\SubtaskModel;
use Kanboard\Model\TaskModel;
use PicoDb\Table;
use PicoDb\Database;

/**
 * Filter subtasks by due date
 *
 * @package filter
 * @author  Craig Crosby
 */
class SubTaskDueDateFilter extends BaseFilter implements FilterInterface
{
    const TABLE = 'subtasks';
    /**
     * Database object
     *
     * @access private
     * @var Database
     */
    private $db;

    /**
     * Get search attribute
     *
     * @access public
     * @return string[]
     */
    public function getAttributes()
    {
        return array('category_subtask');
    }

    /**
     * Set database object
     *
     * @access public
     * @param Database $db
     * @return $this
     */
    public function setDatabase(Database $db)
    {
        $this->db = $db;
        return $this;
    }

    /**
     * Apply filter
     *
     * @access public
     * @return FilterInterface
     */
    public function apply()
    {
        if ($this->value == "none") {
            $subtasks = $this->db
                ->table(self::TABLE)
                ->eq('category_subtask', '')
                ->findAllByColumn('task_id');
        } else {
            $subtasks = $this->db
                ->table(self::TABLE)
                ->neq('category_subtask', '')
                ->notNull('category_subtask')
                ->eq('category_subtask', value)
                ->findAllByColumn('task_id');
        }
        if (isset($subtasks) && !empty($subtasks)) {
            return $this->query->in(TaskModel::TABLE . '.id', $subtasks);
        } else {
            return $this->query->in(TaskModel::TABLE . '.id', [0]);
        }
    }
}
