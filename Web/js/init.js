$(document).ready(function () {
    $('.tabs').tabs();
    $('.materialboxed').materialbox();
    $('.slider').slider();
    $('.parallax').parallax();
    $('.dropdown-trigger').dropdown();
    $('.collapsible').collapsible();
    $('.modal').modal();
    $('.sidenav').sidenav();
    $('select').formSelect();
    $("#search-icon").click(function(e){
        $('#nav-mobile').hide();
        $('#logo').hide();
        $("#bar-search").fadeIn();
        $("#search-txt").focus();
    });
    $("#search-icon-s").click(function (e) {
        $('#nav-mobile').hide();
        $('#logo').hide();
        $("#bar-search").fadeIn();
        $("#search-txt").focus();
    });
    $('#close').click(function(e){
        $('#nav-mobile').fadeIn();
        $('#logo').fadeIn();
        $("#bar-search").hide();
    });
    

    $('#updateprov').click(function(e){
        e.preventDefault();
    });

    function manageData(json){
        console.log(json);
    }
});