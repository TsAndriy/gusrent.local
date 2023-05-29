<?php
    include_once("header.php");
?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php
            $category_id = $_GET['category_id'];
            $news = get_category_id($category_id);
            $category = get_name_category($category_id);
            ?>
            <h2 style="padding-top: 20px"><?=$category['title']?>:</h2>
            <hr>
        </div>

    </div>
    <div class="row" style="padding-bottom: 50px">
        <?php foreach ($news as $new):?>
            <div class="col-md-6" style="padding-top: 50px">
                <div class="card h-100">
                    <img src="<?=$new['img']?>" class="card-img-top" alt="Картинка новини">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title"><?=$new['title']?></h3>
                        <p class="card-text flex-grow-1"><?=mb_substr($new['content'], 0, 140, 'UTF-8').'...'?></p>
                        <a href="post.php?post_id=<?=$new['id']?>" class="btn btn-success ">Читати більше</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
