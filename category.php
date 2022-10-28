<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require 'app/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-9"> 
            
            <div class="page-header">
            <h1><?=get_category_title($_GET['id'])?>:</h1>
             </div>
                 <?php
                $category_id=$_GET['id'];
                $posts=get_posts_by_category($category_id);
                ?>
            <?php foreach($posts as $post):?>
            <div class="row">
  <div class="span12">
    <div class="row">
      <div class="span8">
        <h4><strong><a href="/post.php?post_id=<?=$post['id']?>"><?=$post['title']?></a></strong></h4>
      </div>
    </div>
    <div class="row">
      <div class="span2">
        <a href="#" class="thumbnail">
            <img src="<?=$post['image']?>" alt="">
        </a>
      </div>
      <div class="span10">      
        <p>
            <?=mb_substr($post['content'],0,128,'UTF-8').'...'?>
        </p>
        <p><a class="btn" href="/post.php?post_id=<?=$post['id']?>">Читать полностью</a></p>
      </div>
    </div>
    <div class="row">
      <div class="span8">
        <p></p>
        <p>
          <i class="icon-list"></i><a href="#">Название категории</a> 
          | <i class="icon-calendar"></i> 25 ноября 2017 21:00
        </p>
      </div>
    </div>
  </div>
</div>
   <hr>
      <?php endforeach;?>      
        </div>
        <div class="col-md-3">
            <?php include_once 'app/sidebar.php';?>
        </div>
         </div>
     </div>
<?php
require 'app/footer.php';
?>
