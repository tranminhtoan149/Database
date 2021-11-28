<?php foreach ($data['listClient'] as $key => $val) { ?>
    <tr>
        <th scope="row"><?php echo $val['MA_KHACH_HANG'] ?></th>
        <td><?php echo $val['CMND'] ?></td>
        <td>
            <a href="<?php echo $DOMAIN ?>/Home/DetailClient/<?php echo $val['MA_KHACH_HANG'] ?>">
                <?php echo $val['HO_TEN'] ?>
            </a>
        </td>
        <td><?php echo $val['DIEN_THOAI'] ?></td>
        <td><?php echo $val['EMAIL'] ?></td>
        <td><?php echo $val['USERNAME'] ?></td>
        <td><?php echo $val['DIEM'] ?></td>
        <td><?php echo $val['LOAI'] ?></td>
    </tr>
<?php } ?>