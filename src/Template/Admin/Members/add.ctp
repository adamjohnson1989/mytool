<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="portlet box green" id="member-info">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i><?php echo __('Thông Tin Ứng Viên')?>
                </div>
            </div>
            <div class="portlet-body">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs ">
                            <li class="active">
                                <a href="#tab_15_1" data-toggle="tab">
                                    Thông Tin Cơ Bản </a>
                            </li>
                            <li>
                                <a href="#tab_15_2" data-toggle="tab">
                                    Quá Trình Học Tập </a>
                            </li>
                            <li>
                                <a href="#tab_15_3" data-toggle="tab">
                                    Kinh Nghiệm Làm Việc </a>
                            </li>
                            <li>
                                <a href="#tab_15_4" data-toggle="tab">
                                    Thành Phần Gia Đình </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_15_1">
                                    <h3 class="form-section">Thông Tin Cá Nhân</h3>
                                    <?= $this->Form->create($member,['class' => 'form-horizontal','id' => 'memberInfo','enctype' => 'multipart/form-data']) ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group " style="text-align: center">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-preview  thumbnail" data-trigger="fileinput" style="width: 200px; height: 200px;">
                                                        </div>
                                                        <div>
                                                        <span class="btn default btn-file">
                                                        <span class="fileinput-new">
                                                        Select image </span>
                                                        <span class="fileinput-exists">
                                                        Change </span>
                                                        <input type="file" name="file" id="file">
                                                        </span>
                                                            <a href="#" class="btn red fileinput-exists" data-dismiss="fileinput">
                                                                Remove </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <?php
                                                     $this->Form->templates([
                                                    'inputContainer' => '<div class="col-md-9">{{content}}</div>',
                                                    ]);
                                                    ?>
                                                    <?php echo $this->Form->label('name','Họ Tên', ['class' => 'control-label col-md-3']); ?>
                                                    <?php echo $this->Form->input('name',[
                                                    'label' => false,
                                                    'placeholder'=>'Nguyễn Văn A',
                                                    'class' => 'form-control input-circle'
                                                    ]) ?>

                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <?php
                                                         $this->Form->templates([
                                                        'inputContainer' => '<div class="col-md-9">{{content}}</div>',
                                                        ]);
                                                    ?>
                                                    <?php echo $this->Form->label('gender','Giới Tính', ['class' => 'control-label col-md-3']); ?>
                                                    <div class="col-md-9">
                                                        <?php echo $this->Form->select(
                                                            'gender',
                                                            ['0' => 'Nữ','1' => 'Nam'],
                                                            ['default' => '0','class' => 'form-control input-circle']
                                                        ) ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <?php
                                                     $this->Form->templates([
                                                    'inputContainer' => '<div class="col-md-9">{{content}}</div>',
                                                    ]);
                                                    ?>
                                                    <?php echo $this->Form->label('birthday','Ngày Sinh', ['class' => 'control-label col-md-3']); ?>
                                                    <?php echo $this->Form->input('birthday',[
                                                    'label' => false,
                                                    'placeholder'=>'1/1/1998',
                                                    'class' => 'form-control input-circle'
                                                    ]) ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <?php
                                                         $this->Form->templates([
                                                        'inputContainer' => '<div class="col-md-9">{{content}}</div>',
                                                        ]);
                                                        ?>
                                                        <?php echo $this->Form->label('kokyo','Quê Quán', ['class' => 'control-label col-md-3']); ?>
                                                        <?php echo $this->Form->input('kokyo',[
                                                        'label' => false,
                                                        'placeholder'=>'Quận 1, Tp. HCM',
                                                        'class' => 'form-control input-circle'
                                                        ])
                                                    ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <div class="col-md-6 padding-top-10 ">
                                                            <?php
                                                                 $this->Form->templates([
                                                                'inputContainer' => '<div class="col-md-6">{{content}}</div>',
                                                                ]);
                                                                ?>
                                                                <?php echo $this->Form->label('shincho','Chiều Cao', ['class' => 'control-label col-md-6']); ?>
                                                                <?php echo $this->Form->input('shincho',[
                                                                'label' => false,
                                                                'placeholder'=>'170',
                                                                'class' => 'form-control input-circle'
                                                                ])
                                                            ?>
                                                    </div>
                                                    <div class="col-md-6 padding-top-10 ">
                                                        <?php
                                                                 $this->Form->templates([
                                                                'inputContainer' => '<div class="col-md-6">{{content}}</div>',
                                                                ]);
                                                                ?>
                                                                <?php echo $this->Form->label('taiju','Cân nặng', ['class' => 'control-label col-md-6']); ?>
                                                                <?php echo $this->Form->input('taiju',[
                                                                'label' => false,
                                                                'placeholder'=>'60',
                                                                'class' => 'form-control input-circle'
                                                                ])
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Tay Thuận</label>
                                                    <div class="col-md-9">
                                                        <div class="radio-list">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="te" value="0"/>
                                                                Tay Trái </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="te" value="1" checked/>
                                                                Tay Phải </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 padding-top-10">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <?php
                                                             $this->Form->templates([
                                                            'inputContainer' => '<div class="col-md-6">{{content}}</div>',
                                                            ]);
                                                        ?>
                                                        <?php
                                                            echo $this->Form->label('hidarime','Mắt Trái', ['class' => 'control-label col-md-6']); ?>
                                                            <?php echo $this->Form->input('hidarime',[
                                                            'label' => false,
                                                            'placeholder'=>'2.0',
                                                            'class' => 'form-control input-circle'
                                                            ])
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <?php
                                                             $this->Form->templates([
                                                            'inputContainer' => '<div class="col-md-6">{{content}}</div>',
                                                            ]);
                                                        ?>
                                                        <?php
                                                           echo $this->Form->label('migime','Mắt Phải', ['class' => 'control-label col-md-6']);
                                                        ?>
                                                        <?php echo $this->Form->input('migime',[
                                                        'label' => false,
                                                        'placeholder'=>'2.0',
                                                        'class' => 'form-control input-circle'
                                                        ])
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6 padding-top-10">
                                                <div class="form-group">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <?php
                                                            $this->Form->templates([
                                                            'inputContainer' => '<div class="col-md-6">{{content}}</div>',
                                                            ]);
                                                            ?>
                                                            <?php echo $this->Form->label('ketsueki','Nhóm Máu', ['class' => 'control-label col-md-6']); ?>
                                                            <div class="col-md-6">
                                                                <?php echo $this->Form->select(
                                                                'ketsueki',
                                                                ['0' => 'A','1' => 'B','2' => 'AB','3' => 'O' ],
                                                                ['default' => '0','class' => 'form-control input-circle']
                                                                ) ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <?php
                                                             $this->Form->templates([
                                                            'inputContainer' => '<div class="col-md-6">{{content}}</div>',
                                                            ]);
                                                            ?>
                                                            <?php
                                                            echo $this->Form->label('iq','IQ', ['class' => 'control-label col-md-6']); ?>
                                                            <?php echo $this->Form->input('iq',[
                                                            'label' => false,
                                                            'placeholder'=>'110',
                                                            'class' => 'form-control input-circle'
                                                            ])
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div style="text-align: center">
                                                    <button class="btn btn-circle blue"  onclick="saveMemberInfo(); return false">Submit</button>
                                                    <button type="button" class="btn btn-circle default">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    <?= $this->Form->end() ?>
                                </div>
                            <div class="tab-pane" id="tab_15_2">
                                <div id="member-info-2"></div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div style="text-align: center">
                                            <button class="btn btn-circle blue"  onclick="saveMemberInfo2(); return false">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_15_3">
                                <div id="member-info-3"></div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div style="text-align: center">
                                            <button class="btn btn-circle blue"  onclick="saveMemberInfo3(); return false">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_15_4">
                                <div id="member-info-4"></div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div style="text-align: center">
                                            <button class="btn btn-circle blue"  onclick="saveMemberInfo3(); return false">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>
<div id="loading" style="display: none">Loading&#8230;</div>
<script>
    function saveMemberInfo(){
        jQuery('#loading').show();
        var form = jQuery('#memberInfo');
        var form_data = new FormData(this);
        var file_data = $('#file').prop('files')[0];
        var fData = form.serializeArray();
        jQuery.each(fData, function(i, field){
            $("#results").append(field.name + ":" + field.value + " ");
            form_data.append(field.name, field.value);
        });
        form_data.append('image', file_data);
        form_data.append('action1', 'ajax_handler_import');
        jQuery.ajax({
            type: 'POST',
            url: jQuery(form).attr('action'),
            data: form_data,
            contentType: false,
            cache: false,
            processData:false,
            success: function(response){
                jQuery('#loading').hide();
                var res = jQuery.parseJSON(response);
                if(res.status == 1){
                    var x = '<div style="max-width:600px;"><h3>Thông Tin Cơ Bản Của Ứng Viên Đã Được Lưu.</h3>';
                    x += '<p>Thêm Thông Tin Quá Trình Học Tập Của Ứng Viên?</p><p><button class="btn btn-circle green" data-fancybox-close onclick="updateInfo(2)">Có</button>';
                    x += '<button data-fancybox-close class="btn btn-circle dark">Không</button></p></div>';
                    var instance = $.fancybox.open(x);
                }
            }
        });
    }
    function updateInfo(i) {
        if(i == 2){
            jQuery('a[href="#tab_15_2"]').click();
        }else if(i == 3){
            jQuery('a[href="#tab_15_3"]').click();
        }else if(i == 4){
            jQuery('a[href="#tab_15_4"]').click();
        }
    }

    var memberInfo2 = document.getElementById('member-info-2');
    var memInfo2 = new Handsontable(memberInfo2, {
        data: [
            ['', '','']
        ],
        colHeaders: ['Từ', 'Đến', 'Tên Trường'],
        rowHeaders: true,
        dropdownMenu: true,
        minSpareRows: 1,
        contextMenu: true,
        autoColumnSize: true,
        colWidths: [150,150,600],
        stretchH: 'none'
    });
    var memberInfo3 = document.getElementById('member-info-3');
    var memInfo3 = new Handsontable(memberInfo3, {
        data: [
            ['', '','','']
        ],
        colHeaders: ['Từ', 'Đến', 'Tên Công Ty', 'Chức vụ'],
        rowHeaders: true,
        dropdownMenu: true,
        minSpareRows: 1,
        contextMenu: true,
        autoColumnSize: true,
        colWidths: [150,150,500,200],
        stretchH: 'none'
    });
    function saveMemberInfo2() {
        jQuery('#loading').show();
        var memInfo2Data = memInfo2.getData();
        memInfo2Data.splice(-1,1);
        var form_data = JSON.stringify(memInfo2Data);
        console.log(form_data);
        jQuery.ajax({
            type: 'POST',
            contentType: 'application/json',
            url: '/admin/benkyos/add',
            data: form_data,
            success: function(response){
                jQuery('#loading').hide();
                var res = jQuery.parseJSON(response);
                if(res.status == 1){
                    var x = '<div style="max-width:600px;"><h3>Thông Tin Quá Trình Học Tập Của Ứng Viên Đã Được Lưu.</h3>';
                    x += '<p>Thêm Thông Tin Quá Trình Làm Việc Của Ứng Viên?</p><p><button class="btn btn-circle green" data-fancybox-close onclick="updateInfo(3)">Có</button>';
                    x += '<button data-fancybox-close class="btn btn-circle dark">Không</button></p></div>';
                    var instance = $.fancybox.open(x);
                }
            }
        });
    }

    function saveMemberInfo3() {
        jQuery('#loading').show();
        var memInfo3Data = memInfo3.getData();
        memInfo3Data.splice(-1,1);
        var form_data = JSON.stringify(memInfo3Data);
        jQuery.ajax({
            type: 'POST',
            contentType: 'application/json',
            url: '/admin/keikens/add',
            data: form_data,
            success: function(response){
                jQuery('#loading').hide();
                var res = jQuery.parseJSON(response);
                if(res.status == 1){
                    var x = '<div style="max-width:600px;"><h3>Thông Tin Quá Trình Làm Việc Của Ứng Viên Đã Được Lưu.</h3>';
                    x += '<p>Thêm Thông Tin Gia Đình Của Ứng Viên?</p><p><button class="btn btn-circle green" data-fancybox-close onclick="updateInfo(3)">Có</button>';
                    x += '<button data-fancybox-close class="btn btn-circle dark">Không</button></p></div>';
                    var instance = $.fancybox.open(x);
                }
            }
        });
    }



</script>