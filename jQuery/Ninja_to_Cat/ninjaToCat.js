$(document).ready(function() {
    $("img").click(function() {
        let char = ["ninja", "cat"];
        let randomChar = Math.round(Math.random() * 1);
        let randomNumChar = Math.round(Math.random() * 4);
        let newData = "img/"+ char[randomChar] + randomNumChar + ".png";
        let temp = $(this).attr("data-alt-src");
        $(this).attr("src", temp);
        $(this).attr("data-alt-src", newData);
    });
});