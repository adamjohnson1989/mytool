<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Saiyous $saiyous
 */
?>

<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i><?php echo __('Thông Tin Đơn Hàng')?>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?= $this->Form->create($saiyous,['class' => 'form-horizontal','id' => 'saiyous']) ?>
        <div class="form-body">
            <div class="form-group">
                <label class="control-label col-md-3">Chọn Đơn Hàng</label>
                <div class="col-md-6 input-circle">
                    <select name="recruitments_id" class="recruitments form-control input-circle">
                        <option value="0"><?= h("-- Chọn Đơn Hàng  --") ?></option>
                        <?php foreach($catData as $r): ?>
                        <option value="<?= $r->id ?>"><?= $r->name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3">Thời Gian Thi Tuyển</label>
                <div class="col-md-6">
                    <div class="input-group input-medium date date-picker" data-date-format="dd/mm/yyyy" data-date-start-date="+0d">
                        <input type="text" name="deadline" class="form-control input-circle" readonly>
                                                        <span class="input-group-btn">
                                                            <button class="btn default" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                    </div>
                </div>
            </div>

            <!-- Begin Add Member -->
            <div class="form-group">
                <label class="control-label col-md-3">Danh Sách Ứng Viên</label>
                <div class="col-md-6 input-circle">
                    <select name="members[]" class="js-example-data-ajax form-control input-circle" multiple="multiple"></select>
                    <div id="results">
                        <div class="member clearfix">
                            <div class="avatar">
                                <img src="" alt="">
                            </div>
                            <div class="member-info">
                                <h5 class="member-name"></h5>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Add Member -->


        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <?= $this->Form->button(__('Submit'),['class' => 'btn btn-circle blue']) ?>
                    <button type="button" class="btn btn-circle default">Cancel</button>
                </div>
            </div>
        </div>
        <?= $this->Form->end() ?>

        <!-- END FORM-->
    </div>
</div>
<script type="text/javascript">
    $('.date-picker').datepicker();
    $('.recruitments').select2();
    $(".js-example-data-ajax").select2({
        ajax: {
            url: "/admin/saiyous/search_member",
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    q: params.term, // search term
                    page: params.page
                };
            },
            processResults: function (data, params) {
                // parse the results into the format expected by Select2
                // since we are using custom formatting functions we do not need to
                // alter the remote JSON data, except to indicate that infinite
                // scrolling can be used
                params.page = params.page || 1;

                return {
                    results: data.items,
                    pagination: {
                        more: (params.page * 30) < data.total_count
                    }
                };
            },
            cache: true
        },
        placeholder: 'Tìm kiếm thông tin ứng viên',
        escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
        minimumInputLength: 1,
        templateResult: formatRepo,
        templateSelection: formatRepoSelection
    });

    function formatRepo (repo) {
        if (repo.loading) {
            return repo.text;
        }

        var markup = "<div class='select2-result-repository clearfix'>" +
                "<div class='select2-result-repository__avatar'><img src='" + repo.image + "' /></div>" +
                "<div class='select2-result-repository__meta'>" +
                "<div class='select2-result-repository__name'>" + repo.name + "</div>";

        markup += "<div class='select2-result-repository__description'>Ngày Sinh: " + repo.birthday + ".</div>";
        markup += "<div class='select2-result-repository__statistics'>" +
                "<div class='select2-result-repository__forks'>Mã Số HV: " + repo.my_number + ".</div>" +
                "<div class='select2-result-repository__stargazers'>Quê Quán: " + repo.kokyo + ".</div>" +
                "</div>" +
                "</div></div>";

        return markup;
    }

    function formatRepoSelection (repo) {
        var markup = "<div class='member-info'>" +
                "<div class='member-image'><img src='" + repo.image + "' /></div>" +
                "<div class='member-desc'>" +
                "<h5 class='member-name'>" + repo.name + "</h5>";

        markup += "<div class='member-info'><span class='birthday'>Ngày Sinh: " + repo.birthday + "</span>";
        markup +=  "<span class='mynumber'> Mã Số HV: "+ repo.my_number + "</span></div></div>";
        markup += "<div class='clearfix'></div></div>";
        return markup;
    }

    //associations_id

    var assoData = '<?= json_encode($catData) ?>';
    var assoAry = jQuery.parseJSON(assoData);
    console.log(assoAry);
    for (var i = 0; i < assoAry.length; i++) {
        jQuery('#associations_id').append("<option value='" + assoAry[i].id  + "'>" + assoAry[i].name + "</option>");
    }

    $('#associations_id').on('change', function() {
        var idx = this.value;
        $('#companys_id').children('option:not(:first)').remove();
        for (var i = 0; i < assoAry.length; i++) {
            if(assoAry[i].id == idx){
                var comAry= assoAry[i].companys;
                for(var j = 0; j < comAry.length; j++) {
                    jQuery('#companys_id').append("<option value='" + comAry[j].id  + "'>" + comAry[j].name + "</option>");
                }
                break;
            }

        }
    });
</script>

