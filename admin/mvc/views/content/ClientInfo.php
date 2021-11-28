<input type="text" class="form-control w-50 mt-3 mb-3 search-input" placeholder="Search">
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Mã khách hàng</th>
            <th scope="col">CMND</th>
            <th scope="col">Họ và tên</th>
            <th scope="col">Điện thoại</th>
            <th scope="col">Email</th>
            <th scope="col">User Name</th>
            <th scope="col">Điểm</th>
            <th scope="col">Loại</th>
        </tr>
    </thead>
    <tbody class="client-content">
        <?php require_once "ClientInfoSearch.php" ?>
    </tbody>
</table>