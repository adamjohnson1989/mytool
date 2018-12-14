<table class="table table-hover table-light">
    <thead>
    <tr class="uppercase">
        <th> Từ </th>
        <th> Đến </th>
        <th> Tên Trường </th>
    </tr>
    </thead>
    <?php if(count($benkyos)) : ?>
        <?php foreach($benkyos as $b): ?>
            <tr>
                <td class="fit">
                    <?= h($b->from_time) ?>
                </td>
                <td>
                    <?= h($b->to_time)?>
                </td>
                <td>
                    <?= h($b->school_name)?>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="3">
                Không Có Thông Tin Quá Trình Học Tập.
            </td>
        </tr>

    <?php endif; ?>
</table>