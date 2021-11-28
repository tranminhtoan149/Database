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

//add item
$(".button-add").click(function () {
    if ($(".input-name").val() && $(".input-s").val() && $(".input-guest").val() && $(".input-bed").val() && $(".input-decr").val() && $(".input-supp").val()) {
        $.ajax({
            url: DOMAIN + "/Home/doAdd",
            type: "post",
            data: {
                name: $(".input-name").val(),
                s: $(".input-s").val(),
                guest: $(".input-guest").val(),
                bed: $(".input-bed").val(),
                decr: $(".input-decr").val(),
                supp: $(".input-supp").val(),
            },
            success: function (result) {
                console.log(result);
            },
        });
    } else {
        $(".err").text("Please fill in all required fields");
    }
});
