<?php
    include_once('header.php');
?>
    <section class="cards">
        <div class="container">
            <div class="row" style="padding-top: 25px">
                <?php $news = get_news(); ?>
                <?php foreach ($news as $new):?>
                    <div class="col">
                        <div class="card" style="width: 350px;" >
                            <img src="<?=$new['img']?>" class="card-img-top" alt="Картинка новини">
                            <div class="card-body">
                                <h5 class="card-title"><?=$new['title']?></h5>
                                <p class="card-text"><?=mb_substr($new['content'], 0, 140, 'UTF-8').'...'?></p>
                                <a href="post.php?post_id=<?=$new['id']?>" class="btn btn-success">Читати більше</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php
    include_once('footer.php');
?>