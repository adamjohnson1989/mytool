
<?php $i=1; if(is_array($gakurekiAry) && count($gakurekiAry)): ?>
    <?php foreach($gakurekiAry as $gakureki): ?>
        <div class="row gakureki-item-<?php echo $i ?>">
            <div class="col-md-2 date date-picker">
                <input type="text" name= "<?php echo 'gakureki[' .  $i  . '][from]' ?>" class="form-control input-circle" readonly value="<?php echo $gakureki['from'] ?>"/>
                <span class="add-on"><i class="icon-th"></i></span>
            </div>
            <div class="col-md-2 date date-picker">
                <input type="text" name="<?php echo 'gakureki[' .  $i  . '][to]' ?>" class="form-control input-circle" readonly value="<?php echo $gakureki['to'] ?>"/>
                <span class="add-on"><i class="icon-th"></i></span>
            </div>
            <div class="col-md-3">
                <select name="<?php echo 'gakureki[' .  $i  . '][type]' ?>" class="form-control input-circle valid" required="required" aria-invalid="false">
                    <option value="0" <?php echo $gakureki['type'] == 0 ? 'selected' : ''  ?> >-- Chọn Loại Hình  --</option>
                    <option value="1" <?php echo $gakureki['type'] == 1 ? 'selected' : ''  ?> >Tiểu Học</option>
                    <option value="2" <?php echo $gakureki['type'] == 2 ? 'selected' : ''  ?> >Trung Học Cơ Sở</option>
                    <option value="3" <?php echo $gakureki['type'] == 3 ? 'selected' : ''  ?>>Trung Học Phổ Thông</option>
                    <option value="4" <?php echo $gakureki['type'] == 4 ? 'selected' : ''  ?>>Trung Cấp</option>
                    <option value="5" <?php echo $gakureki['type'] == 5 ? 'selected' : ''  ?>>Cao Đẳng</option>
                    <option value="6" <?php echo $gakureki['type'] == 6 ? 'selected' : ''  ?>>Đại Học</option>
                </select>
            </div>
            <div class="col-md-4">
                <input type="text" name="<?php echo 'gakureki[' .  $i  . '][name]' ?>" class="form-control input-circle" value="<?php echo $gakureki['name'] ?>"/>
            </div>
            <div class="col-md-1">
                <a href="#" class="btn btn-icon-only btn-circle red" onclick="deleteGekureki('<?php echo $i ?>'); return false;"><i class="fa fa-times"></i></a>
            </div>
        </div>

    <?php $i++; endforeach; ?>
<?php endif; ?>
<div class="row gakureki-item-<?php echo $i ?>">
    <div class="col-md-2 date date-picker">
        <input type="text" name= "<?php echo 'gakureki[' .  $i  . '][from]' ?>" class="form-control input-circle" readonly/>
        <span class="add-on"><i class="icon-th"></i></span>
    </div>
    <div class="col-md-2 date date-picker">
        <input type="text" name= "<?php echo 'gakureki[' .  $i  . '][to]' ?>" class="form-control input-circle" readonly/>
        <span class="add-on"><i class="icon-th"></i></span>
    </div>
    <div class="col-md-3">
        <select name="<?php echo 'gakureki[' .  $i  . '][type]' ?>" class="form-control input-circle valid" required="required" aria-invalid="false">
            <option value="0" selected="selected">-- Chọn Loại Hình  --</option>
            <option value="1">Tiểu Học</option>
            <option value="2">Trung Học Cơ Sở</option>
            <option value="3">Trung Học Phổ Thông</option>
            <option value="4">Trung Cấp</option>
            <option value="5">Cao Đẳng</option>
            <option value="6">Đại Học</option>
        </select>
    </div>
    <div class="col-md-4">
        <input type="text" name="<?php echo 'gakureki[' .  $i  . '][name]' ?>" class="form-control input-circle"/>
    </div>
    <div class="col-md-1">
        <a href="#" class="btn btn-icon-only btn-circle red" onclick="deleteGekureki('<?php echo $i ?>'); return false;"><i class="fa fa-times"></i></a>
    </div>
</div>

<script>
    jQuery('.date-picker').datepicker( {
        format: "mm/yyyy",
        startView: "months",
        minViewMode: "months"
    });
    function deleteGekureki(i){
        jQuery(".gakureki-item-" + i).remove();
    }
</script>

