let DOMAIN = "http://localhost/Database/admin";
let timeSearch = null;
$(".search-input").keyup(function () {
    clearTimeout(timeSearch);
    timeSearch = setTimeout(() => {
        let keyword = $(this).val();
        let time;
        $.ajax({
            url: DOMAIN + "/Home/SearchClient",
            type: "post",
            data: {
                keyword: keyword,
            },
            success: function (result) {
                $(".client-content").html(result);
            },
        });
    }, 500);
});
//statistic
$(".button-statistic").click(function () {
    if (this.form.checkValidity()) {
        $.ajax({
            url: DOMAIN + "/Home/doStatistic",
            type: "post",
            data: {
                id: $("#select-cn").val(),
                year: $(".input-year").val(),
            },
            success: function (result) {
                $(".content-statistic").html(result);
            },
        });
    }
});

//add item
$(".button-add").click(function (e) {
    if (this.form.checkValidity()) {
        e.preventDefault();
        let supp = [];
        $("input:checkbox[name=ckbox]:checked").each(function () {
            supp.push({
                id: $(this).val(),
                quantity: $("#" + $(this).val()).val(),
            });
        });
        $.ajax({
            url: DOMAIN + "/Home/doAdd",
            type: "post",
            data: {
                name: $(".input-name").val(),
                square: $(".input-s").val(),
                guest: $(".input-guest").val(),
                bed_size: $(".input-size").val(),
                input_quantity: $(".input-quantity").val(),
                description: $(".input-description").val(),
                supp: supp,
            },
            success: function (result) {
                $(".succ-add").text("Success");
                setTimeout(() => {
                    $(".succ-add").text("");
                    $("#form_add")[0].reset();
                }, 1000);
            },
            error: function () {
                $(".err-add").text("Failed");
            },
        });
    }
});
$(".login-button").click(function () {
    $username = $(".username-input").val();
    $password = $(".password-input").val();
    if ($username && $password) {
        $.ajax({
            url: DOMAIN + "/Home/doLogin",
            type: "post",
            data: {
                username: $username,
                password: $password,
            },
            success: function (result) {
                if (result == "valid") {
                    window.location.href = DOMAIN;
                } else {
                    $(".err").text(result);
                    setTimeout(() => {
                        $(".err").text("");
                    }, 1500);
                }
            },
        });
    } else {
        $(".err").text("Mời bạn nhập đầy đủ tài khoản và mật khẩu");
        setTimeout(() => {
            $(".err").text("");
        }, 1500);
    }
});
