"use strict";
$(document).ready(function() {
	$('[data-toggle="tooltip"]').tooltip()
	$(".card-header-right .close-card").on('click', function() {
        var $this = $(this);
        $this.parents('.card').animate({
            'opacity': '0',
            '-webkit-transform': 'scale3d(.3, .3, .3)',
            'transform': 'scale3d(.3, .3, .3)'
        });
        setTimeout(function() {
            $this.parents('.card').remove();
        }, 800);
    });
    $(".card-header-right .card-option .fa-chevron-left").on('click', function() {
        var $this = $(this);
        if ($this.hasClass('fa-chevron-right')) {
            $this.parents('.card-option').animate({
                'width': '35px',
            });
        } else {
            $this.parents('.card-option').animate({
                'width': '140px',
            });
        }
        $(this).toggleClass("fa-chevron-right").fadeIn('slow');
    });
    $(".card-header-right .minimize-card").on('click', function() {
        var $this = $(this);
        var port = $($this.parents('.card'));
        var card = $(port).children('.card-block').slideToggle();
        $(this).toggleClass("fa-minus").fadeIn('slow');
        $(this).toggleClass("fa-plus").fadeIn('slow');
    });
    $(".card-header-right .full-card").on('click', function() {
        var $this = $(this);
        var port = $($this.parents('.card'));
        port.toggleClass("full-card");
        $(this).toggleClass("fa-window-restore");
    });

    $(function() {
        var ctx = document.getElementById('statistics-chart').getContext("2d");
        var greenline = ctx.createLinearGradient(500, 0, 100, 0);
        greenline.addColorStop(0, '#fd93a8');
        greenline.addColorStop(1, '#FC6180');
        var blueline = ctx.createLinearGradient(500, 0, 100, 0);
        blueline.addColorStop(1, '#56CCF2');
        blueline.addColorStop(0, '#2F80ED');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL"],
                datasets: [{
                    label: "Data",
                    borderColor: blueline,
                    pointBorderColor: blueline,
                    pointBackgroundColor: blueline,
                    pointHoverBackgroundColor: blueline,
                    pointHoverBorderColor: blueline,
                    pointBorderWidth: 10,
                    pointHoverRadius: 10,
                    pointHoverBorderWidth: 1,
                    pointRadius: 0,
                    fill: false,
                    borderWidth: 4,
                    data: [20, 50, 30, 50, 20, 70, 30]
                }, {
                    label: "Data",
                    borderColor: greenline,
                    pointBorderColor: greenline,
                    pointBackgroundColor: greenline,
                    pointHoverBackgroundColor: greenline,
                    pointHoverBorderColor: greenline,
                    pointBorderWidth: 10,
                    pointHoverRadius: 10,
                    pointHoverBorderWidth: 1,
                    pointRadius: 0,
                    fill: false,
                    borderWidth: 4,
                    data: [40, 30, 50, 15, 50, 50, 80]
                }]
            },
            options: {
                legend: {
                    position: "top"
                },
                tooltips: {
                    enabled: true,
                    intersect: !1,
                    mode: "nearest",
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            fontColor: "rgba(0,0,0,0.5)",
                            fontStyle: "bold",
                            beginAtZero: true,
                            maxTicksLimit: 5,
                            padding: 20,
                        },
                        gridLines: {
                            drawTicks: false,
                            display: false
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            drawTicks: false,
                            display: false
                        },
                        ticks: {
                            padding: 20,
                            fontColor: "rgba(0,0,0,0.5)",
                            fontStyle: "bold"
                        }
                    }]
                }
            }
        });
    });

    var bar_ctx = document.getElementById('process-complience-chart').getContext('2d');
    var bar_gradient = bar_ctx.createLinearGradient(0, 0, 0, 600);
    bar_gradient.addColorStop(1, '#56CCF2');
    bar_gradient.addColorStop(0, '#4099ff');
    var bar_chart = new Chart(bar_ctx, {
        type: 'bar',
        data: {
            labels: ["", "2016", "2017", "2018", ""],
            datasets: [{
                label: '# of Votes',
                data: [0, 12, 19, 15],
                backgroundColor: bar_gradient,
                hoverBackgroundColor: bar_gradient,
                hoverBorderWidth: 0,
            }]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        display: false,
                    },
                }],
                xAxes: [{
                    gridLines: {
                        display: false,
                        drawBorder: false
                    }
                }]
            }
        }
    });
    var ctx = document.getElementById("feedback-chart").getContext("2d");
    var config = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [83, 17, ],
                backgroundColor: ["#00b19d", "#ef5350"],
                label: 'Dataset 1',
                borderWidth: 0
            }],
            labels: ["Positive", "Negative"]
        },
        options: {
            responsive: true,
            legend: {
                display: false,
            },
            title: {
                display: false,
                text: 'Chart.js Doughnut Chart'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };
    window.myDoughnut = new Chart(ctx, config);
});





var mobile_menu_visible = 0,
mobile_menu_initialized = false,
toggle_initialized = false,
bootstrap_nav_initialized = false,
$sidebar,
isWindows;

$(document).ready(function(){

    window_width = $(window).width();
    $sidebar = $('.sidebar');

    if($('body').hasClass('sidebar-mini')){
        lite.misc.sidebar_mini_active = true;
    }
    lite.initSidebarsCheck();
    lite.initMinimizeSidebar();
});

$(window).resize(function(){
    lite.initSidebarsCheck();
});


lite = {

    misc:{
        navbar_menu_visible: 0,
        active_collapse: true,
        disabled_collapse_init: 0,

    },

    initSidebarsCheck: function(){
        if($(window).width() <= 991){
            if($sidebar.length != 0){
                lite.initSidebarMenu();

            } else {
                lite.initBootstrapNavbarMenu();
            }
        }

    },

    initMinimizeSidebar: function(){
        $('.sidebar .collapse').on('show.bs.collapse',function(){
            if($(window).width() > 991){
                if(lite.misc.sidebar_mini_active == true){
                    return false;
                } else{
                    return true;
                }
            }
        });

        $('#minimizeSidebar').click(function(){
            var $btn = $(this);

            if(lite.misc.sidebar_mini_active == true){
                $('body').removeClass('sidebar-mini');
                lite.misc.sidebar_mini_active = false;

            }else{

                $('.sidebar .collapse').collapse('hide').on('hidden.bs.collapse',function(){
                    $(this).css('height','auto');
                });


                setTimeout(function(){
                    $('body').addClass('sidebar-mini');

                    $('.sidebar .collapse').css('height','auto');
                    lite.misc.sidebar_mini_active = true;
                },300);
            }

            var simulateWindowResize = setInterval(function(){
                window.dispatchEvent(new Event('resize'));
            },180);

            setTimeout(function(){
                clearInterval(simulateWindowResize);
            },1000);
        });
    },


    initSidebarMenu: debounce(function(){
        $sidebar_wrapper = $('.sidebar-wrapper');
        if(!mobile_menu_initialized){
            $navbar = $('nav').find('.navbar-collapse').first().clone(true);
            nav_content = '';
            mobile_menu_content = '';
            $navbar.children('ul').each(function(){

                content_buff = $(this).html();
                nav_content = nav_content + content_buff;
            });

            nav_content = '<ul class="nav nav-mobile-menu">' + nav_content + '</ul>';

            $navbar_form = $('nav').find('.navbar-form').clone(true);

            $sidebar_nav = $sidebar_wrapper.find(' > .nav');

            $nav_content = $(nav_content);
            $nav_content.insertBefore($sidebar_nav);
            $navbar_form.insertBefore($nav_content);

            $(".sidebar-wrapper .dropdown .dropdown-menu > li > a").click(function(event) {
                event.stopPropagation();

            });

            mobile_menu_initialized = true;
        } else {
            console.log('window with:' + $(window).width());
            if($(window).width() > 991){
                $sidebar_wrapper.find('.navbar-form').remove();
                $sidebar_wrapper.find('.nav-mobile-menu').remove();
                console.log(lite.misc.sidebar_mini_active);
                mobile_menu_initialized = false;
            }
        }

        if(!toggle_initialized){
            $toggle = $('.navbar-toggle');
            $toggle.click(function (){

                if(mobile_menu_visible == 1) {
                    $('html').removeClass('nav-open');

                    $('.close-layer').remove();
                    setTimeout(function(){
                        $toggle.removeClass('toggled');
                    }, 400);

                    mobile_menu_visible = 0;
                } else {
                    setTimeout(function(){
                        $toggle.addClass('toggled');
                    }, 430);


                    main_panel_height = $('.main-panel')[0].scrollHeight;
                    $layer = $('<div class="close-layer"></div>');
                    $layer.css('height',main_panel_height + 'px');
                    $layer.appendTo(".main-panel");

                    setTimeout(function(){
                        $layer.addClass('visible');
                    }, 100);

                    $layer.click(function() {
                        $('html').removeClass('nav-open');
                        mobile_menu_visible = 0;

                        $layer.removeClass('visible');

                         setTimeout(function(){
                            $layer.remove();
                            $toggle.removeClass('toggled');

                         }, 400);
                    });

                    $('html').addClass('nav-open');
                    mobile_menu_visible = 1;

                }
            });

            toggle_initialized = true;
        }
    }, 500),


    initBootstrapNavbarMenu: debounce(function(){

        if(!bootstrap_nav_initialized){
            $navbar = $('nav').find('.navbar-collapse').first().clone(true);

            nav_content = '';
            mobile_menu_content = '';

            //add the content from the regular header to the mobile menu
            $navbar.children('ul').each(function(){
                content_buff = $(this).html();
                nav_content = nav_content + content_buff;
            });

            nav_content = '<ul class="nav nav-mobile-menu">' + nav_content + '</ul>';

            $navbar.html(nav_content);
            $navbar.addClass('bootstrap-navbar');

            // append it to the body, so it will come from the right side of the screen
            $('body').append($navbar);

            $toggle = $('.navbar-toggle');

            $navbar.find('a').removeClass('btn btn-round btn-default');
            $navbar.find('button').removeClass('btn-round btn-fill btn-info btn-primary btn-success btn-danger btn-warning btn-neutral');
            $navbar.find('button').addClass('btn-simple btn-block');

            $toggle.click(function (){
                if(mobile_menu_visible == 1) {
                    $('html').removeClass('nav-open');

                    $('.close-layer').remove();
                    setTimeout(function(){
                        $toggle.removeClass('toggled');
                    }, 400);

                    mobile_menu_visible = 0;
                } else {
                    setTimeout(function(){
                        $toggle.addClass('toggled');
                    }, 430);

                    $layer = $('<div class="close-layer"></div>');
                    $layer.appendTo(".wrapper-full-page");

                    setTimeout(function(){
                        $layer.addClass('visible');
                    }, 100);


                    $layer.click(function() {
                        $('html').removeClass('nav-open');
                        mobile_menu_visible = 0;

                        $layer.removeClass('visible');

                         setTimeout(function(){
                            $layer.remove();
                            $toggle.removeClass('toggled');

                         }, 400);
                    });

                    $('html').addClass('nav-open');
                    mobile_menu_visible = 1;

                }

            });
            bootstrap_nav_initialized = true;
        }
    }, 500)
}
function debounce(func, wait, immediate) {
    var timeout;
    return function() {
        var context = this, args = arguments;
        clearTimeout(timeout);
        timeout = setTimeout(function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        }, wait);
        if (immediate && !timeout) func.apply(context, args);
    };
};