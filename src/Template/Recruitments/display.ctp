<?php
    $this->assign('title', 'Xuất Khẩu Lao Động Hoàng Hà JSC - Danh Sách Đơn Hàng Thực Tập Sinh');
?>
<div class="row">
  <h2 class="pg-new-title">
    Danh Sách Đơn Hàng Thực Tập Sinh
  </h2>
  <div class="pg-new-detail recruitment-list">
    <?php foreach ($recruitments as $recruitment): ?>
      <div class="row">
        <div class="col-md-4 col-sm-4">
            <div class="item">
              <img alt="" src="assets/pages/img/works/img1.jpg">
            </div>
        </div>
        <div class="col-md-8 col-sm-8">
          <h2 class="item-title"><a href="<?php echo '/tuyen-dung/' . $recruitment->id . '-' . $recruitment->url?>"><?= h($recruitment->name)?></a></h2>
          <ul class="blog-info">
            <li><i class="fa fa-calendar"></i> 25/07/2013</li>
            <li><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li>
          </ul>
          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui sint blanditiis prae sentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing condimentum eleifend enim a feugiat.</p>
          <a href="blog-item.html" class="more pull-right">Chi Tiết <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
        </div>
      </div>
      <hr class="blog-post-sep">
    <?php endforeach;?>
  </div>
  <div class="paginator" id="pg_custom">
    <ul class="btn-toolbar">
      <?= $this->Paginator->prev('< ' . __('Prev')) ?>
      <?= $this->Paginator->numbers() ?>
      <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
  </div>
</div>