<th>
	<?php if (isset($paginator)): ?>
	    <?= $paginator->order(t('Due Date'), \Kanboard\Model\SubtaskModel::TABLE.'.due_date') ?>
	<?php else: ?>
		<?= t('Due Date') ?>
	<?php endif ?>
</th>
<th>
    <?php if (isset($paginator)): ?>
        <?= $paginator->order(t('Category'), \Kanboard\Model\SubtaskModel::TABLE.'.category_subtask') ?>
    <?php else: ?>
        <?= t('Category') ?>
    <?php endif ?>
</th>