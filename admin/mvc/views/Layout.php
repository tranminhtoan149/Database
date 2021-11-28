<?php $DOMAIN = 'http://localhost/Database/admin' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo $DOMAIN ?>/public/bootstrap5/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $DOMAIN ?>/public/font-awesome/css/font-awesome.min.css" />
    <script src="<?php echo $DOMAIN ?>/public/bootstrap5/jquery.min.js"></script>
    <script src="<?php echo $DOMAIN ?>/public/bootstrap5/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo $DOMAIN ?>/public/css/style.css">
    <title>Document</title>
</head>

<body>
    <div style="text-align: center;">
        <h1>Thông tin khách hàng</h1>
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-3 col-md-4 task">
                <div class="title">TASK</div>
                <div class="nav-list">
                    <div class="all-item bg-primary mt-2">Danh Mục</div>
                    <div class="categories">
                        <div class="category mt-2">
                            <button type="button" class="btn btn-secondary">Thông tin khách hàng</button>
                        </div>
                        <div class="category mt-2">
                            <button type="button" class="btn btn-secondary">Thêm thông tin loại phòng</button>
                        </div>
                        <div class="category mt-2">
                            <form action="<?php echo $DOMAIN ?>/Home/StatisticPage" method="get">
                                <button type="button" class="btn btn-secondary">Thống kê</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 content">
                <?php require_once 'content/' . $data['page'] . '.php' ?>
            </div>
        </div>
    </div>
    <script src="<?php echo $DOMAIN ?>/public/js/script.js">

    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>