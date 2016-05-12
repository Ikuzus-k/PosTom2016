<?php
// app/controllers/tasks_controller.php
class TasksController extends AppController {
  var $name = 'Tasks';
  var $uses = array('Task');

  function index() {
    $this->layout = 'Task';
    $this->set('yet_tasks', $this->Task->findAllByStatus('yet', null, 'Task.created ASC'));
    $this->set('done_tasks', $this->Task->findAllByStatus('done', null, 'Task.modified DESC'));
    //$this->set('tasks', $this->Task->find('all', array('order' => 'Task.created ASC')));
  }

  function add() {
    if($this->request->is('post')) {
      if(!empty($this->request->data)) {
        if ($this->Task->save($this->data, true, array('content', 'created', 'modified'))) {
            $this->Session->setFlash('タスクが追加されました', 'default', array('class' => 'flash_success'));
            return $this->redirect(array('action' => 'index'));
        }
      }
    }
  }

  function done($id) {
    if ($this->Task->findById($id)) {
      $this->Task->id = $id;
      $this->Task->save(array('status' => 'done'));
    }
    $this->redirect('/tasks');
  }

  function del($id) {
    $this->Task->delete($id);
    $this->redirect('/tasks');
  }
}
