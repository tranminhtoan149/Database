<?php $DOMAIN = 'http://localhost/Database/admin' ?>
<form id="form_add">
    <div class="row">
        <div class="col-lg-12">
            <div class="mt2">
                <label for="" class="form-label ">Loại phòng: </label>
                <div class="input-group">
                    <label for="" class="input-group-text ">Tên loại phòng: </label>
                    <input type="text" class="form-control input-name" required />
                    <label for="" class="input-group-text ">Diện tích: </label>
                    <input type="number" min=0 class="form-control input-s" required />
                    <label for="" class="input-group-text ">Số khách tối đa: </label>
                    <input type="number" min=1 max=10 class="form-control input-guest" required />
                </div>

            </div>
            <div class="mt-2">
                <label for="" class="form-label ">Thông tin giường: </label>
                <div class="input-group ">
                    <span class="input-group-text">Kích thước giường</span>
                    <input type="number" min="0" max=9.9 step=0.1 class="form-control input-size" required>
                    <span class="input-group-text">Số lượng giường</span>
                    <input type="number" min=1 max=10 class="form-control input-quantity" required>
                </div>
            </div>
            <div class="mt-2">
                <label for="" class="form-label ">Mô tả khác: </label>
                <input type="text" class="form-control input-description" required />
            </div>
            <div class="mt-2">
                <label for="" class="form-label ">Vật tư có trong loại phòng: </label>
                <?php foreach ($data['supp'] as $key => $val) { ?>
                    <div class="input-group mb-2">
                        <div class="input-group-text p-2">
                            <input class="" name="ckbox" type="checkbox" value="<?php echo $val['MA_LOAI_VAT_TU'] ?>">
                        </div>
                        <div class="form-control">
                            <?php echo $val['TEN_LOAI_VAT_TU']  ?>
                        </div>
                        <span class="input-group-text">Số lượng</span>
                        <input type="number" class="form-control input-quantity" min=1 max=20 id="<?php echo $val['MA_LOAI_VAT_TU'] ?>">
                    </div>
                <?php } ?>
            </div>
    <div class="contain-button">
        <button type="submit" class="btn btn-primary button-add mt-3">Add new</button>
        <button type="reset" class="btn btn-danger mt-3 ms-4 button-reset">Reset</button>
    </div>
    <div class="text-success">
        <strong class="succ-add"></strong>
    </div>
    <div class="text-danger">
        <strong class="err-add"></strong>
    </div>
</form>