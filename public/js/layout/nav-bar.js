$(document).ready(function () {
    var url = window.location;
    $('ul.navbar-nav a[href="'+ url +'"]').parents('.nav-item').addClass('active');
});
