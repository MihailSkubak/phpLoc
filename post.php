<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
$post_id=$_GET['post_id'];
//eсли в POST_ID не число остановит скрипт
if(!is_numeric($post_id)) exit();
require_once 'app/header.php';
//получаем массив поста
 $post=get_post_by_id($post_id);
?>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="page-header">
            <h1><?=$post['title']?></h1>
        </div>
            <p>
          <i class="icon-list"></i><a href="#">Название категории</a> 
           |<i class="icon-calendar"></i> 25 ноября 2017 21:00
        </p>
        <hr>
        <div class="post-content">
            <img src="<?=$post['image']?>"align="left" style="padding:0 10px 10px 0;">
            <?=$post['content']?>
        </div>
        </div>
        <div class="col-md-3">
            
        </div>
    </div>
</div>


<?php
require 'app/footer.php';
?>
