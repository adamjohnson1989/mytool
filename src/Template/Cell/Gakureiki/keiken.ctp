<table class="table table-hover table-light">
    <thead>
    <tr class="uppercase">
        <th> Từ </th>
        <th> Đến </th>
        <th> Tên Công Ty </th>
        <th> Chức Vụ </th>
    </tr>
    </thead>
    <?php if(count($keikens)) : ?>
    <?php foreach($keikens as $k): ?>
    <tr>
        <td class="fit">
            <?= h($k->from_time) ?>
        </td>
        <td>
            <?= h($k->to_time)?>
        </td>
        <td>
            <?= h($k->company)?>
        </td>
        <td>
            <?= h($k->job)?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
        <td colspan="4">
            Không Có Thông Tin Kinh Nghiệm.
        </td>
    </tr>

    <?php endif; ?>
</table>