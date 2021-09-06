$(function() {
    $('.app-detail-wrap').hide();
    $('html').on("click", function (e) {
        $(".app-list-toggler").removeClass("open");
        $(".app-wrap").removeClass("app-list-expand");
    });
    $('.app-nav-applist').on("click", function (e) {
        e.stopPropagation();
    });
    $(".app-list-toggler").on("click", function (e) {
        return (
            this.classList.toggle("open"),
            $(".app-wrap").toggleClass("app-list-expand"),
            !1
        );
    });

    $(".app-nav-close").on("click", function (e) {
        $(".app-list-toggler").removeClass("open");
        $(".app-wrap").removeClass("app-list-expand");
    });
    $('.adv-search-close').on('click', function() {
        $('#adv_wrap_toggler').dropdown('hide');
    });
    
    $("#apps-quick-search").keyup(function () {
        var e = $(this).val().trim().toLowerCase();
        $(".app-item")
          .hide()
          .filter(function () {
            return -1 != $(this).html().trim().toLowerCase().indexOf(e);
          })
          .show();
    });
	$('[data-toggle="tooltip"]').tooltip();

    $(".add-filter-btn").on('click', function(){
    	$(".filter-list-wrap").toggle().css('opacity', '1');
    });
    $('.header-filter .dropdown-menu').click(function(e) {
    	e.stopPropagation();
    });
    
  	$(".dropdown-close-btn").on('click', function(){
  		$(this).closest(".dropdown-menu").prev().dropdown("toggle");
  	});
  	$(".search-btn").on("click", function() {
        $(".header-search").toggleClass("open");
    });

    $(".app-item").on('click', function() {
        $(".app-item").removeClass('selected');
        $(this).addClass('selected');
        $(".app-detail-empty").hide();
        $(".app-entry-form-wrap").show();
    });
    if ($(window).width() < 768) {
        $('.app-detail-wrap').hide();
    }

    $('.dropdown .has-child').on('click', 'a[data-toggle="collapse"]', function (event) {
        event.preventDefault();
        event.stopPropagation();
        $($(this).attr('href')).collapse('toggle');
    });

    var ps = new PerfectScrollbar(".main-nav-wrap", {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 5
    });
    
    var ps = new PerfectScrollbar(".apps-wrap", {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 5
    });

    var dropdownMenu, appListDropdown;
    $(window).on('show.bs.dropdown', function (e) {
        appListDropdown = $(e.target).find('.app-list-dropdown');
        dropdownMenu = $(e.target).find('.main-nav-dropdown');
        $('.app-nav').append(dropdownMenu.detach());
        $('.app-content-wrap').append(appListDropdown.detach());
        var eOffset = $(e.target).offset();
        appListDropdown.css({
            'display': 'block',
            'top': eOffset.top,
            'left': eOffset.left + 63
        });
        dropdownMenu.css({
            'display': 'block',
            'top': eOffset.top,
            'left': eOffset.left + 63
        });
    });
    $(window).on('hide.bs.dropdown', function (e) {
        $(e.target).append(appListDropdown.detach());
        appListDropdown.hide();
        $(e.target).append(dropdownMenu.detach());
        dropdownMenu.hide();
    });
    

    $('.app-avatar-checkbox input[type="checkbox"]').change(function(e){
        if($(this).not(":checked").length == 0) {
            $('.app-item').addClass('checked');
        } else {
            $('.app-item').removeClass('checked');
        }
    });

    $('.select-all-checkbox input[type="checkbox"]').change(function(){
        if(this.checked){
            $('.app-avatar-checkbox input[type="checkbox"]').each(function(){
                this.checked=true;
                $('.app-item').addClass('checked');
            })              
        }else{
            $('.app-avatar-checkbox input[type="checkbox"]').each(function(){
                this.checked=false;
                $('.app-item').removeClass('checked');
            })              
        }
    });

    $('.header-search .dropdown-menu').click(function(e) {
        e.stopPropagation();
    });

    if ($(window).width() < 991) {
        $('.app-item .app-info').on('click', function(){
            $('.app-detail-wrap').show();
        });
    }

    // $(window).on('load resize', function(){
    //     if ($(window).width() <= 600) {
    //         $("#entrymodalActionFooter").html(entrymodalActions);
    //         $("#entrymodalActions").empty();
    //     } else {
    //         $("#entrymodalActionFooter").empty();
    //     }
    // });

    $('.mobile-back-btn').on('click', function() {
        $('.app-detail-wrap').hide();
    });
});

$(document).ajaxComplete(function() {
    $('.mobile-back-btn').on('click', function() {
        $('.app-detail-wrap').hide();
    });

    $('.app-avatar-checkbox input[type="checkbox"]').change(function(e){
        console.log($(this));
        if($(this).not(":checked").length == 0) {
            $(this).parents('.app-item').addClass('checked');
        } else {
            $(this).parents('.app-item').removeClass('checked');
        }
    });

    $('.select-all-checkbox input[type="checkbox"]').change(function(){
        if(this.checked){
            $('.app-avatar-checkbox input[type="checkbox"]').each(function(){
                this.checked=true;
                $('.app-item').addClass('checked');
            })              
        }else{
            $('.app-avatar-checkbox input[type="checkbox"]').each(function(){
                this.checked=false;
                $('.app-item').removeClass('checked');
            })              
        }
    });
});
