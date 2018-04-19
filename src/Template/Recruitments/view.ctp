<?php
    $this->assign('title', 'Xuất Khẩu Lao Động Hoàng Hà JSC - ' . $recruitment->name);
?>
<div class="row">
  <h2 class="pg-new-title">
    <?= h($recruitment->name) ?>
  </h2>
  <div class="pg-new-detail recruitment-detail">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <?= htmlspecialchars_decode($recruitment->description)?>
        </div>
        <ul class="blog-info">
          <li><i class="fa fa-user"></i> By admin</li>
          <li><i class="fa fa-calendar"></i> 25/07/2013</li>
          <li><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li>
        </ul>
      </div>
  </div>
</div>