// Show scoll nav by default upon page load
showScrollNav();

// Will override default scroll nav behavior
$(document).ready(function() {
    $(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 500) {
            showScrollNav();
        } else {
            showScrollNav()
        }
    });
});