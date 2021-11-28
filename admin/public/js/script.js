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
