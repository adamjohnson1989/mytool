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

            <script>
                $("#commentForm").validate();
            </script>
            <div class="portlet-body">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs ">
                            <li class="active">
                                <a href="#basic-info" data-toggle="tab">
                                    Thông Tin Cơ Bản </a>
                            </li>
                            <li class="">
                                <a href="#gakureki" data-toggle="tab">
                                    Quá Trình Học Tập </a>
                            </li>
                            <li class="">
                                <a href="#keiken" data-toggle="tab">
                                    Kinh Nghiệm Làm Việc </a>
                            </li>
                            <li class="">
                                <a href="#kazoku" data-toggle="tab">
                                    Thành Phần Gia Đình </a>
                            </li>
                        </ul>
                        <div class="tab-content">

                            <!-- Begin Basic Member Info -->
                            <div class="tab-pane active" id="basic-info">
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
                                                        <input type="file" name="image" id="fileUpload">
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
                                                    'class' => 'form-control input-circle',
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
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <?php
                                                             $this->Form->templates([
                                                    'inputContainer' => '<div class="col-md-9">{{content}}</div>',
                                                    ]);
                                                    ?>
                                                    <?php echo $this->Form->label('my_number','Mã Số Học Viên', ['class' => 'control-label col-md-3']); ?>
                                                    <?php echo $this->Form->input('my_number',[
                                                    'label' => false,
                                                    'placeholder'=>'20180001',
                                                    'class' => 'form-control input-circle',
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
                                                    <?php echo $this->Form->label('kekkon','Tình Trạng Hôn Nhân', ['class' => 'control-label col-md-3']); ?>
                                                    <div class="col-md-9">
                                                        <div class="radio-list">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="kekkon" value="0" checked/>
                                                                Chưa Kết Hôn </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="kekkon" value="1" />
                                                                Đã Kết Hôn </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="kekkon" value="2"/>
                                                                Đã Ly Hôn </label>
                                                        </div>
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
                                        <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Mù Màu</label>
                                                        <div class="col-md-9">
                                                            <div class="radio-list">
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="te" value="0"/>
                                                                    Có </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="te" value="1" checked/>
                                                                    Không </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Hút Thuốc</label>
                                                    <div class="col-md-9">
                                                        <div class="radio-list">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="te" value="0"/>
                                                                Có </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="te" value="1" checked/>
                                                                Không </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Uống Rượu</label>
                                                    <div class="col-md-9">
                                                        <div class="radio-list">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="te" value="0"/>
                                                                Có </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="te" value="1" checked/>
                                                                Không </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Có Hình Xăm</label>
                                                    <div class="col-md-9">
                                                        <div class="radio-list">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="te" value="0"/>
                                                                Có </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="te" value="1" checked/>
                                                                Không </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div style="text-align: center">
                                                    <button class="btn btn-circle blue" onclick="saveMemberInfo(); return false">Submit</button>
                                                    <button type="button" class="btn btn-circle default">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    <?= $this->Form->end() ?>
                                </div>

                            <!-- End Basic Member Info  -->

                            <!-- Begin Gakureki -->
                            <div class="tab-pane" id="gakureki">
                                <div class="table-toolbar">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="btn-group">
                                                <a  onclick="addGakuReki();return false" class="btn green" role="button">Thêm Mới <i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="bl-title">
                                            <div class="col-md-2 text-center">Từ Năm</div>
                                            <div class="col-md-2 text-center">Đến Năm</div>
                                            <div class="col-md-3 text-center">Loại Hình</div>
                                            <div class="col-md-4 text-center">Tên Trường</div>
                                            <div class="col-md-1 text-center"></div>
                                        </div>
                                    </div>
                                    <form method="post" accept-charset="utf-8" class="form-horizontal" id="member-gakureki" action="#">
                                        <div id="gakureki-content">

                                        </div>
                                        <div class="row ">
                                            <div style="text-align: center">
                                                <button class="btn btn-circle blue"   onclick="saveMemberInfo2(); return false">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <!-- End Gakureki -->

                            <!-- Begin Keiken Info -->
                            <div class="tab-pane" id="keiken">
                                <div id="member-info-3"></div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div style="text-align: center">
                                            <button class="btn btn-circle blue"  onclick="saveMemberInfo3(); return false">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End Keiken Info -->

                            <!-- Begin Kazoku Info -->
                            <div class="tab-pane" id="kazoku">
                                <div id="member-info-4"></div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div style="text-align: center">
                                            <button class="btn btn-circle blue"  onclick="saveMemberInfo3(); return false">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Kazoku Info -->
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>

<div id="loading" style="display: none">Loading&#8230;</div>
<script>
    //validateのoption作成
    var memberValid = {
        //入力欄別にルールを作成
        rules:{
            name:{
                required:true
            },
            birthday:{
                required:true
            },
            kokyo : {
                required:true
            },
            shincho:{
                required:true,
                number: true
            },
            taiju:{
                required:true,
                number: true
            },
            hidarime:{
                required:true,
                number: true
            },
            migime:{
                required:true,
                number: true
            },
            iq:{
                required:true,
                number: true
            },
            my_number:{
                required:true,
                number: true
            },
            image:{
                required:true
            }
        }
    };
    function saveMemberInfo(){
        var form = jQuery("#memberInfo");
        form.validate(memberValid);
        //失敗で戻る
        if (!form.valid()) {
            return false;
        };
        //Ajaxでform入力内容送信
        jQuery('#loading').show();

        var form_data = new FormData();
        var fData = form.serializeArray();
        jQuery.each(fData, function(i, field){
            $("#results").append(field.name + ":" + field.value + " ");
            form_data.append(field.name, field.value);
        });
        var file_data = jQuery('#fileUpload').prop('files')[0];
        form_data.append('image', file_data);
//        form_data.append('action1', 'ajax_handler_import');
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
        return false;
    };
    function updateInfo(i) {
        if(jQuery( ".nav-tabs li" ).hasClass( "isDisabled")){
            jQuery( ".nav-tabs li" ).removeClass('isDisabled')
        }
        if(i == 2){
            jQuery('a[href="#tab_15_2"]').click();
        }else if(i == 3){
            jQuery('a[href="#tab_15_3"]').click();
        }else if(i == 4){
            jQuery('a[href="#tab_15_4"]').click();
        }
    }

    function saveMemberInfo3() {
        jQuery('#loading').show();
        jQuery.ajax({
            type: 'POST',
            contentType: 'application/json',
            url: '/admin/benkyos/add',
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

    function saveMemberInfo2() {
        jQuery('#loading').show();
        jQuery.ajax({
            type: 'POST',
            url: '/admin/benkyos/add',
            data: jQuery('#member-gakureki').serialize(),
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

    function addGakuReki(){
        jQuery.ajax({
            type: 'POST',
            dataType: 'html',
            url:'/admin/members/gakureki',
            data: jQuery('#member-gakureki').serialize(),
            success:function(response){
                jQuery("#gakureki-content").html(response);
            }
        });
    }
</script>