<?php
App::uses('AppController', 'Controller');

class MySampleDatasController extends AppController {
  public $scaffold;

  public function add() {
    // レイアウト関係
    $this->layout = "Sample";
    $this->set("header_for_layout", "Sample Application");
    $this->set("footer_for_layout",
        "copyright by SYODA-Tuyano. 2011.");
    // post時の処理
    if ($this->request->is('post')) {
      $this->MySampleData->save($this->request->data);
    }
  }

}
