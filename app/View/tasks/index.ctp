<?php echo $this->Form->create(null, array('type' => 'post', 'action' => './add')); ?>
  <p><?php echo $this->Form->text('Task.content') ?>
  <?php echo $this->Form->end('タスクを追加') ?> </p>

  <h2>未完了タスク</h2>

  <table>
  <tr>
  <th>Id</th>
  <th>タスク内容</th>
  <th>状態</th>
  <th>操作</th>
  <th>作成日</th>
  </tr>
  <?php foreach ($yet_tasks as $task) { ?>
  <tr>
  <td><?php echo h($task['Task']['id']) ?></td>
  <td><?php echo h($task['Task']['content']) ?></td>
  <td><?php echo h($task['Task']['status']) ?></td>
  <td>
   <?php echo $this->Html->link('完了', '/tasks/done/' . $task['Task']['id'], null, '完了してもよろしいですか？') ?>
   <?php echo $this->Html->link('編集', '/tasks/edit/' . $task['Task']['id']) ?>
   <?php echo $this->Html->link('削除',  '/tasks/del/'  . $task['Task']['id'], null, '削除してもよろしいですか？') ?>
  </td>
  <td><?php echo h($task['Task']['created']) ?></td>
  </tr>
  <?php } ?>
  </table>


  <h2>完了タスク</h2>

  <table>
  <tr>
  <th>Id</th>
  <th>タスク内容</th>
  <th>状態</th>
  <th>操作</th>
  <th>作成日</th>
  </tr>
  <?php foreach ($done_tasks as $task) { ?>
  <tr>
  <td><?php echo h($task['Task']['id']) ?></td>
  <td><?php echo h($task['Task']['content']) ?></td>
  <td><?php echo h($task['Task']['status']) ?></td>
  <td><?php echo $this->Html->link('削除', '/tasks/del/' . $task['Task']['id'], null, '削除してもよろしいですか？') ?></td>
  <td><?php echo h($task['Task']['created']) ?></td>
  </tr>
  <?php } ?>
  </table>
