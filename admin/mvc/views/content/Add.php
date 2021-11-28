<div class="form">
    <form action="" id="form_add" onsubmit="return false">
        <div class="row">

            <div class="col-lg-12">
                <div>
                    <label for="input-id" class="form-label mt-2">Mã loại phòng: </label>
                    <input type="number" class="form-control input-id" required value="<?php echo (int)$data['id']['latestId'] + 1 ?>" disabled />
                </div>
                <div>
                    <label for="input-name" class="form-label mt-2">Tên loại phòng: </label>
                    <input type="text" class="form-control input-name" required />
                </div>
                <div>
                    <label for="input-s" class="form-label mt-2">Diện tích: </label>
                    <input type="text" min="0" class="form-control input-s" required />
                </div>
                <div>
                    <label for="input-guest" class="form-label mt-2">Số khách tối đa: </label>
                    <input type="number" class="form-control input-guest" required />
                </div>
                <div>
                    <label for="input-bed" class="form-label mt-2">Thông tin giường: </label>
                    <input type="text" class="form-control input-bed" required />
                </div>
                <div>
                    <label for="input-decr" class="form-label mt-2">Mô tả khác: </label>
                    <input type="text" class="form-control input-decr" required />
                </div>
                <div>
                    <label for="input-supp" class="form-label mt-2">Vật tư có trong loại phòng: </label>
                    <input type="text" class="form-control input-supp" />
                </div>
            </div>
        </div>
        <div class="contain-button">
            <button type="submit" class="btn btn-primary button-add mt-3">Add new</button>
            <button type="reset" class="btn btn-danger mt-3 ms-4 button-reset">Reset</button>
        </div>
        <div class="alert alert-success alert-add mt-4 mb-4">
            <strong class="succ"></strong>
        </div>
        <div class="alert alert-danger alert-add mt-4 mb-4">
            <strong class="err"></strong>
        </div>
    </form>