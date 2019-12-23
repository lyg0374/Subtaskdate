<?= $this->form->date(t('Due Date'), 'due_date', $values + array('due_date' => 0), $errors); ?>
<label for="category_subtask">子任务分类</label>
<select name='category_subtask' tabindex="2" id="category_subtask">
    <option value="dev">dev</option>
    <option value="st">st</option>
    <option value="uat">uat</option>
    <option value="ui">ui</option>
    <option value="ba">ba</option>
</select>