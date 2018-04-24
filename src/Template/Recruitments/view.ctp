<?php
    $this->assign('title', 'Xuất Khẩu Lao Động Hoàng Hà JSC - ' . $recruitment->name);
?>
<div class="row">
  <h2 class="pg-new-title">
    <?= h($recruitment->name) ?>
  </h2>
  <div class="pg-new-detail recruitment-detail">
        <div class="col-md-12 col-sm-12">
          <?= htmlspecialchars_decode($recruitment->description)?>
        </div>
        <ul class="blog-info">
          <li><i class="fa fa-user"></i> By admin</li>
          <li><i class="fa fa-calendar"></i><?= $recruitment->created_at?></li>
          <li><i class="fa fa-tags"></i>
            <?php if($recruitment->type == 0):?>
              <a href="/tuyen-dung/thuc-tap-sinh">Thực Tập Sinh</a>
            <?php else: ?>
              <a href="/tuyen-dung/ky-thuat-vien">Kỹ Sư, Kỹ Thuật Viên</a>
            <?php endif; ?>
          </li>
        </ul>
    <div class="fb-comments" data-href="<?php echo URL . '/tuyen-dung/' . $recruitment->id . '-' . $recruitment->url ?>" data-width="100%" data-numposts="10"></div>
  </div>
</div>