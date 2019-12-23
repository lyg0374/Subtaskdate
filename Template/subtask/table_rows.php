<td>
    <?php if (!empty($subtask['due_date'])): ?>
        <?= $this->dt->date($subtask['due_date']) ?>
    <?php endif ?>
</td>
<td>
    <?php if (!empty($subtask['category_subtask'])): ?>
        <?= $subtask['category_subtask'] ?>
    <?php endif ?>
</td>