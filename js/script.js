jQuery(document).ready(function($) {

    /* Initialition de la barre de navigation */
    $(".site__header .navbar .nav-item a").addClass("nav-link");
    $(".site__header .navbar .searchform div").addClass("input-group");
    $(".site__header .navbar .searchform label").hide();
    $(".site__header .navbar #s").addClass("form-control");
    $(".site__header .navbar #searchsubmit").addClass("btn btn-primary");
    $(".site__header .navbar .dropdown > .nav-link").attr({
        role: "button",
        "data-bs-toggle":"dropdown",
        "aria-expanded": false
    }).addClass("dropdown-toggle");
    $(".site__header .navbar .dropdown > .sub-menu").addClass("dropdown-menu");

    /* Initialisation de newsletter */
    $(".newsletter-content form div").addClass("input-group");
    $(".newsletter-content form input[type=search]").addClass("form-control");
    $(".newsletter-content form button[type=submit]").removeClass("wp-block-search__button").addClass("btn btn-primary");
});
