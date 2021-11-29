<div>
    <a class="btn btn-primary" href="<?php echo $DOMAIN ?>/Home" role="button">Trở lại</a>
</div>
<div class="user-info">
    <ul class="list-group">
        <li class="list-group-item list-group-item-success">Mã khách hàng: <?php echo $data['client']['MA_KHACH_HANG'] ?></li>
        <li class="list-group-item list-group-item-success">Họ và tên: <?php echo $data['client']['HO_TEN'] ?></li>
        <li class="list-group-item list-group-item-success">Điện thoại: <?php echo $data['client']['DIEN_THOAI'] ?></li>
        <li class="list-group-item list-group-item-success">Email: <?php echo $data['client']['EMAIL'] ?></li>
        <li class="list-group-item list-group-item-success">User Name: <?php echo $data['client']['USERNAME'] ?></li>
    </ul>
</div>
<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Mã đặt phòng</th>
            <th scope="col">Ngày giờ đặt</th>
            <th scope="col">Số khách</th>
            <th scope="col">Ngày nhận phòng</th>
            <th scope="col">Ngày trả phòng</th>
            <th scope="col">Tổng tiền</th>
            <th scope="col">Tình trạng</th>
        </tr>
    </thead>
    <tbody>
        <?php

        foreach ($data['dataClient'] as $key => $val) { ?>
            <tr>
                <th><?php echo $val['MA_DAT_PHONG'] ?></th>
                <td><?php echo $val['NGAY_GIO_DAT'] ?></td>
                <td><?php echo $val['SO_KHACH'] ?></td>
                <td><?php echo $val['NGAY_NHAN_PHONG'] ?></td>
                <td><?php echo $val['NGAY_TRA_PHONG'] ?></td>
                <td><?php echo $val['TONG_TIEN'] ?></td>
                <td><?php echo $val['TINH_TRANG'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>