<?php
    $catArr = [
      'van-hoa-nhat-ban' => 'Văn Hóa Nhật Bản',
      'tieng-nhat' => 'Tiếng Nhật',
      'kinh-nghiem' =>  'Kinh Nghiệm'
    ];
    $this->assign('title', 'Xuất Khẩu Lao Động Hoàng Hà JSC - Danh Sách Tin Tức');
?>
<div class="row">
  <h2 class="pg-new-title">
    <?php echo isset($catArr[$category_url]) ? $catArr[$category_url] : 'Tin Tức'?>
  </h2>
  <div class="pg-new-detail recruitment-list">
    <?php foreach ($news as $new): ?>
      <div class="row">
        <div class="col-md-4 col-sm-4" style="text-align: center">
              <img alt="<?= h($new->name)?>" src="<?= h($new->thumb)?>" width="260" height="195">
        </div>
        <div class="col-md-8 col-sm-8">
          <h2 class="item-title"><a href="<?php echo '/tin-tuc/' . $category_url . '/' . $new->id . '-' . $new->url ?>"><?= h($new->name)?></a></h2>
          <ul class="blog-info">
            <li><i class="fa fa-calendar"></i> <?= h($new->created_at)?></li>
            <li><i class="fa fa-tags"></i><a href="<?php echo '/tin-tuc/' . $category_url ?>"> <?= $catArr[$category_url]?></a></li>
          </ul>
          <p><?= h($new->short_desc)?></p>
          <a href="<?php echo '/tin-tuc/' . $category_url . '/' . $new->id . '-' . $new->url ?>" class="more pull-right">Chi Tiết <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
        </div>
      </div>
      <hr class="blog-post-sep">
    <?php endforeach;?>
  </div>
  <?php if(count($news) > ITEM_PER_PAGE_FRONTEND):?>
  <div class="paginator" id="pg_custom">
    <ul class="btn-toolbar">
      <?= $this->Paginator->prev('< ' . __('Prev')) ?>
      <?= $this->Paginator->numbers() ?>
      <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
  </div>
  <?php endif; ?>
</div>