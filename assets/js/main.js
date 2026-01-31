// Main JS file for the inventory system
$(document).ready(function() {
    // Current page active link
    let currentPath = window.location.pathname.split("/").pop();
    if (currentPath === "") currentPath = "index.php";

    $(".nav-link").each(function() {
        if ($(this).attr("href") === currentPath) {
            $(this).addClass("active");
        } else {
            $(this).removeClass("active");
        }
    });
});
