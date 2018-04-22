<ul class="nav nav-tabs recruitment">
    <li class="active"><a href="#tab-1" data-toggle="tab">Thực Tập Sinh</a></li>
    <li><a href="#tab-2" data-toggle="tab">Kỹ Thuật Viên</a></li>
</ul>
<div class="tab-content">
    <div class="tab-pane row fade in active" id="tab-1">
        <div class="portlet-body">
            <div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Tên Công Việc</th>
                        <th scope="col">Địa Điểm Làm Việc</th>
                        <th scope="col">Ngày Tuyển</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($recruitmentAry['tts'] as $tts):?>
                    <tr>
                        <td>
                            <a href="<?php echo '/tuyen-dung/' . $tts->id . '-' . $tts->url?>"> <?= h($tts->name)?></a>
                        </td>
                        <td>
                            <?= h($tts->basho)?>
                        </td>
                        <td>
                            <?= h($tts->deadline)?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="pull-right" style="padding-right: 15px">
                    <a href="/tuyen-dung/thuc-tap-sinh" >Xem Thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane row fade" id="tab-2">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Tên Công Việc</th>
                    <th>Địa Điểm Làm Việc</th>
                    <th>Ngày Tuyển</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($recruitmentAry['ks'] as $ks):?>
                    <tr>
                        <td>
                            <a href="<?php echo '/tuyen-dung/' . $ks->id . '-' . $ks->url?>"> <?= h($ks->name)?></a>
                        </td>
                        <td>
                            <?= h($ks->basho)?>
                        </td>
                        <td>
                            <?= h($ks->deadline)?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <div class="pull-right" style="padding-right: 15px">
                <a href="/tuyen-dung/ky-thuat-vien" style="padding-right: 15px">Xem Thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>