<?php $DOMAIN = 'http://localhost/Database/admin' ?>
<form onsubmit="return false">
    <label class="mt-2" for="select-cn">Chọn chi nhánh:</label>
    <select class="form-control" id="select-cn">
        <?php foreach ($data['branch'] as $key => $val) { ?>
            <option value="<?php echo $val['MA_CHI_NHANH'] ?>"><?php echo $val['MA_CHI_NHANH'] ?></option>
        <?php } ?>
    </select>
    <div>
        <label for="input-year" class="form-label mt-2">Nhập năm: </label>
        <input type="number" required class="form-control input-year" />
    </div>
    <br>
    <button type="submit" class="btn btn-primary button-statistic">Submit</button>
</form>
<table class="table table-hover table-striped w-50">
    <thead>
        <tr>
            <th>Tháng</th>
            <th>Tổng số lượt khách</th>
        </tr>
    </thead>
    <tbody class="content-statistic">

    </tbody>
</table>