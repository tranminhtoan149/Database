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
    <title>Cơ sở dữ liệu</title>
</head>

<?php if (is_logged()) {
    header("Location: " . $DOMAIN . "\/Home/ClientPage");
} ?>

<body style="background-color: rgb(0, 0, 0 , 0.9);">
    <div class="container" style="margin-top: 100px;">
        <div class="login-template">
            <div class="login-content">
                <div class="login-box">
                    <div class="title-login">ACCOUNT LOGIN</div>
                    <div class="user-account">
                        <form action="" onsubmit="return false" class="login-form">
                            <div class="form-group">
                                <input type="text" class="username-input form-control input-effect" placeholder="Username" />
                            </div>
                            <div class="form-group mt-3">
                                <input type="password" name="password" class="password-input form-control input-effect" placeholder="Password" />
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="login-button form-control">Login</button>
                            </div>
                        </form>
                        <div class="text-danger err mt-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo $DOMAIN ?>/public/js/script.js"> </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>