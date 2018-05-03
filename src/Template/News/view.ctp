<?php
    $this->assign('title', 'Xuất Khẩu Lao Động Hoàng Hà JSC - ' . $new->name);
?>
<div class="row">
  <h2 class="pg-new-title">
    <?= h($new->name) ?>
  </h2>
  <div class="pg-new-detail new-detail">
        <div class="col-md-12 col-sm-12">
          <?= htmlspecialchars_decode($new->description)?>
        </div>
        <ul class="blog-info">
          <li><i class="fa fa-user"></i> By admin</li>
          <li><i class="fa fa-calendar"></i> <?= h($new->created_at) ?></li>
          <li><i class="fa fa-tags"></i><a href="<?php echo '/tin-tuc/' . $new->category->url ?>"> <?= $new->category->name?></a></li>
        </ul>
    <div class="fb-comments" data-href="<?php echo URL . '/tin-tuc/' .$new->category->url . '/' . $new->id . '-' . $new->url ?>" data-width="100%" data-numposts="10"></div>
  </div>
</div>