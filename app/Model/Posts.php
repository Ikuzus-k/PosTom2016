<?php
/**
 * /app/Model/Posts.php
 */
class Posts extends AppModel
{
    /** 使用テーブル名 */
    public $useTable = 'posts';

    /** 主キー(省略時は「id」になるので省略も可) */
    public $primaryKey = 'id';
}
?>
