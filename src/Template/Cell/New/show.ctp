
<div class="col-md-6 col-sm-6 new-main">
    <?php if(count($news)):?>
        <a href="<?php echo '/tin-tuc/' . $category_url . '/' . $news[0]['id'] . '-' . $news[0]['url']?>" class="fancybox-button" title="<?= $news[0]['name'] ?>">
            <img class="img-responsive" src="<?= $news[0]['thumb'] ?>" alt="" width="550" height="365">
        </a>
        <h3 class="new-title margin-top-10">
            <a href="<?php echo '/tin-tuc/' . $category_url . '/' . $news[0]['id'] . '-' . $news[0]['url']?>" class="fancybox-button" title="<?= $news[0]['name'] ?>">
                <?= $news[0]['name'] ?>
            </a>
        </h3>
        <div>
            <?= $news[0]['short_desc'] ?>
        </div>
    <?php endif;?>
</div>
<?php
    unset($news[0]);
?>
<div class="col-md-6 col-sm-6 new-item">
    <?php if(count($news)):?>
        <ul class="list-group ">
            <?php foreach($news as $newItem):?>
            <li class="margin-bottom-10 list-group-item">
                <a href="<?php echo '/tin-tuc/' . $category_url . '/' . $newItem['id'] . '-' . $newItem['url']?>">
                    <img class="thumbnail-img" style="width:70px; height:50px" src="<?= $newItem['thumb'] ?>" scale="0">
                </a>
                <a href="<?php echo '/tin-tuc/' . $category_url . '/' . $newItem['id'] . '-' . $newItem['url']?>"><?= $newItem['name']?></a>
            </li>
            <?php endforeach; ?>
        </ul>

    <?php endif; ?>
    <p><a class="more pull-right" href="<?php echo '/tin-tuc/' . $category_url ?>">Xem Thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
</div>
