<?= $this->form->date(t('Due Date'), 'due_date', $values + array('due_date' => 0), $errors); ?>
<label for="category_subtask">子任务分类</label>
<select name='category_subtask' tabindex="2" id="category_subtask">
    <option value="PO">业务属主</option>
    <option value="PM">产品经理</option>
    <option value="UE">UE</option>
    <option value="UI">UI</option>
    <option value="DEV_Native">原生开发</option>
    <option value="DEV_Web">前端开发</option>
    <option value="DEV_Server">后端开发</option>
    <option value="ST">系统测试</option>
    <option value="UAT">业务测试</option>
</select>