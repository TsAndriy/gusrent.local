<?php
    include_once('header.php');
?>
    <section class="cards">
        <div class="container">
            <div class="row" style="padding-bottom: 50px">
                <?php $news = get_news(); ?>
                <?php foreach ($news as $new):?>
                    <div class="col-md-4" style="padding-top: 50px">
                        <div class="card h-100">
                            <div class="imagText">
                                <img src="<?=$new['img']?>" class="card-img-top" alt="Картинка новини">

                                <div class="bottom-left">
                                    <?php if ($new['category_id'] == 1): ?>
                                        Купівля
                                    <?php elseif ($new['category_id'] == 2): ?>
                                        Оренда
                                    <?php endif; ?>
                                </div>
                            </div>


                            <div class="card-body d-flex flex-column">
                                <h3 class="card-title"><?=$new['title']?></h3>
                                <p class="card-text flex-grow-1"><?=mb_substr($new['content'], 0, 140, 'UTF-8').'...'?></p>
                                <a href="post.php?post_id=<?=$new['id']?>" class="btn btn-success ">Переглянути</a>
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