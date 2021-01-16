$(document).ready(function(){
    let shopName = $("nav a").attr("href");
    $("h1 span").text(shopName);

    $(".founder p").before("Toto Hanap");

    $(".founder img").hide();
    $(".founder button").click(function() {
        $(".founder img").slideToggle();
    });

    $(".hotCoffees li, .hotTeas li, .blended li").click(function() {
        $(this).addClass("red");
        $(this).after("$5");
        let item = $(this).html();
        $(".items ol").append("<li>" + item + "</li>");
    });

    $("#menus").hide();
    $("button.up").click(function() {
        $("#menus").slideUp();
    });
    $("button.down").click(function() {
        $("#menus").slideDown();
    });

    $(".instructions").hide();
    $("button.shopInstruction").click(function() {
        $(this).hide();
        $(".instructions").show();
    });

    $(".shoppingCart").hide();
    $(".payment").hide();
    $("button.shopCart").click(function() {
        $(".shoppingCart").toggle();
    });

    $("input#givenName").keyup(function() {
        $("p span").text($(this).val());
    });

    $("button.continue").click(function() {
        $(".shoppingCart").fadeOut();
        $(".payment").fadeIn();
    });
});