$(document).ready(function() {
    $("img").click(function() {
        $(this).fadeOut();
    });
    
    $("button").click(function() {
        $("img").show();
    });
});