$(document).ready(function() {
    $("img").hover(function() {
        let temp = $(this).attr("data-alt-src");
        let temp2 = $(this).attr("src");
        $(this).attr("src", temp)
        $(this).attr("data-alt-src", temp2)
    },function() {
        let temp = $(this).attr("data-alt-src");
        let temp2 = $(this).attr("src");
        $(this).attr("src", temp);
        $(this).attr("data-alt-src", temp2)
    });
});