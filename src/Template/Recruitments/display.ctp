<?php
    if($type == 'thuc-tap-sinh'){
      $this->assign('title', 'Xuất Khẩu Lao Động Hoàng Hà JSC - Danh Sách Đơn Hàng Thực Tập Sinh');
    }else{
      $this->assign('title', 'Xuất Khẩu Lao Động Hoàng Hà JSC - Danh Sách Đơn Hàng Kỹ Sư, Kỹ Thuật Viên');
    }

?>
<div class="row">
  <h2 class="pg-new-title">
    <?php
      if($type == 'thuc-tap-sinh'){
        echo  'Danh Sách Đơn Hàng Thực Tập Sinh';
      }else{
        echo  'Danh Sách Đơn Hàng Kỹ Sư, Kỹ Thuật Viên';
      }
    ?>

  </h2>
  <div class="pg-new-detail recruitment-list">
    <div class="portlet-body">
      <div>
        <table class="table">
          <thead>
          <tr>
            <th>Tên Công Việc</th>
            <th>Địa Điểm Làm Việc</th>
            <th>Ngày Tuyển</th>
          </tr>
          </thead>
          <tbody>
          <?php foreach ($recruitments as $recruitment): ?>
          <tr>
            <td>
              <a href="<?php echo '/tuyen-dung/' . $recruitment->id . '-' . $recruitment->url?>"><?= h($recruitment->name)?></a>
            </td>
            <td>
              <?= h($recruitment->basho)?>
            </td>
            <td>
              <?= h($recruitment->deadline)?>
            </td>
          </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="paginator" id="pg_custom">
    <ul class="btn-toolbar">
      <?= $this->Paginator->prev('< ' . __('Prev')) ?>
      <?= $this->Paginator->numbers() ?>
      <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
  </div>
</div>