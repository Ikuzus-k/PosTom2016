<?php
/**
 * /app/Controller/HelloController.php
 */
class HelloController extends AppController
{
    /** 使用するモデルを指定 */
    public $uses = array('Posts');

    /** 自動レンタリング無効 */
    public $autoLayout = false;

    /**
     *  indexアクション
     */
    public function index() {
        //全件取得
        $data = $this->Posts->find('all');

        //デバッグ表示
        debug($data);
    }
}
?>
