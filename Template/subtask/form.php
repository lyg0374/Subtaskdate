<?= $this->form->date(t('Due Date'), 'due_date', $values + array('due_date' => 0), $errors); ?>
<label for="category_subtask">子任务分类</label>
<select name='category_subtask' tabindex="2" id="category_subtask">
    <option value="" <?=isset($values['category_subtask']) && $values['category_subtask'] == '' ? 'selected' :'' ?>>无分类</option>
    <option value="PO" <?=isset($values['category_subtask']) && $values['category_subtask'] == 'PO' ? 'selected' :'' ?>>业务属主</option>
    <option value="PM" <?=isset($values['category_subtask']) && $values['category_subtask'] == 'PM' ? 'selected' :'' ?>>产品经理</option>
    <option value="UE" <?=isset($values['category_subtask']) && $values['category_subtask'] == 'UE' ? 'selected' :'' ?>>UE</option>
    <option value="UI" <?=isset($values['category_subtask']) && $values['category_subtask'] == 'UI' ? 'selected' :'' ?>>UI</option>
    <option value="DEV_Native" <?=isset($values['category_subtask']) && $values['category_subtask'] == 'DEV_Native' ? 'selected' :'' ?>>原生开发</option>
    <option value="DEV_Web" <?=isset($values['category_subtask']) && $values['category_subtask'] == 'DEV_Web' ? 'selected' :'' ?>>前端开发</option>
    <option value="DEV_Server" <?=isset($values['category_subtask']) && $values['category_subtask'] == 'DEV_Server' ? 'selected' :'' ?>>后端开发</option>
    <option value="ST" <?=isset($values['category_subtask']) && $values['category_subtask'] == 'ST' ? 'selected' :'' ?>>系统测试</option>
    <option value="UAT" <?=isset($values['category_subtask']) && $values['category_subtask'] == 'UAT' ? 'selected' :'' ?>>业务测试</option>
</select>