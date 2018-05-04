<ul class="list-group ">
    <?php foreach($news as $newItem):?>
        <li class="margin-bottom-10 list-group-item">
            <a class="thumb" href="<?php echo '/tin-tuc/' . $newItem->category->url . '/' . $newItem['id'] . '-' . $newItem['url']?>">
                <img class="thumbnail-img" style="width:70px; height:50px" src="<?= $newItem['thumb'] ?>" scale="0">
            </a>
            <a href="<?php echo '/tin-tuc/' . $newItem->category->url . '/' . $newItem['id'] . '-' . $newItem['url']?>"><?= $newItem['name']?></a>
        </li>
    <?php endforeach; ?>
</ul>