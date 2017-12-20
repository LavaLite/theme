$(function () {

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
});