<?php
    include_once('header.php');
    $post_id = $_GET['post_id'];
    if (!is_numeric($post_id)) exit();

    $post = get_post_by_id($post_id);
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center" style="padding: 50px 0px 50px 0px">
                <div class="card" style="width: 65%;">
                    <img src="<?=$post['img']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title"> <?=$post['title']?></h3>
                        <p class="card-text"><?=$post['content']?></p>
                        <a href="index.php" class="btn btn-info">Повернутися назад</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    include_once('footer.php');
?>
