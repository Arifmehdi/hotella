<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>HOTEL HTML TEMPLATE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="images/icons/favicon.png">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/libs/revolution/settings.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
</head>

<body class="demo-1 home">
    <div id="preloading">
        <div class="loading-icon">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>

    <div id="wrapper-container" class="content-pusher">
        <div class="overlay-close-menu"></div>

        @include('partial.header')

        <nav class="visible-xs mobile-menu-container mobile-effect" itemscope
            itemtype="http://schema.org/SiteNavigationElement">
            <div class="inner-off-canvas">
                <div class="menu-mobile-effect navbar-toggle">Close <i class="fa fa-times"></i></div>
                <ul class="nav main-menu">
                    <li class="menu-item has-children">
                        <a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="index.html">Home 01</a></li>
                            <li class="menu-item"><a href="index-2.html">Home 02</a></li>
                            <li class="menu-item"><a href="index-3.html">Home 03</a></li>
                            <li class="menu-item"><a href="index-4.html">Home 04</a></li>
                        </ul>
                    </li>
                    <li class="menu-item has-children">
                        <a href="rooms.html">Rooms</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="rooms.html">Rooms Grid View 1</a></li>
                            <li class="menu-item"><a href="rooms-grid-2.html">Rooms Grid View 2</a></li>
                            <li class="menu-item"><a href="room-single.html">Room Detail</a></li>
                        </ul>
                    </li>
                    <li class="menu-item has-children">
                        <a href="blog.html">Blog</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="blog-sidebar-left.html">Blog Sidebar Left</a></li>
                            <li class="menu-item"><a href="blog-sidebar-right.html">Blog Sidebar Right</a></li>
                            <li class="menu-item"><a href="blog-no-sidebar.html">Blog Without Sidebar</a></li>
                            <li class="menu-item"><a href="blog-single.html">Single Post</a></li>
                            <li class="menu-item"><a href="blog-single-gallery.html">Single Post Gallery</a></li>
                        </ul>
                    </li>
                    <li class="menu-item has-children">
                        <a href="events.html">Events</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="events-2columns.html">Events Grid View</a></li>
                            <li class="menu-item"><a href="events.html">Events List View</a></li>
                            <li class="menu-item"><a href="event-single.html">Event Single</a></li>
                            <li class="menu-item"><a href="event-single-expired.html">Event Single Expired</a></li>
                        </ul>
                    </li>
                    <li class="menu-item has-children">
                        <a href="#">Features</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="about-us.html">About Us</a></li>
                            <li class="menu-item"><a href="shop.html">Shop</a></li>
                            <li class="menu-item"><a target="_blank" href="were-launching-soon.html">Coming Soon
                                    Page</a></li>
                            <li class="menu-item"><a href="404.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item has-children"><a href="gallery.html">Gallery</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="gallery-2columns.html">Gallery 2 Columns</a></li>
                            <li class="menu-item"><a href="gallery.html">Gallery 3 Columns</a></li>
                            <li class="menu-item"><a href="gallery-full-width.html">Gallery Full Width</a></li>
                            <li class="menu-item"><a href="gallery-without-filter.html">Gallery Without Filter</a></li>
                            <li class="menu-item"><a href="gallery-with-content.html">Gallery With Content</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
        @yield('content')

        @include('partial.footer')
    </div>
    <div id="back-to-top">
        <i class="ion-ios-arrow-up" aria-hidden="true"></i>
    </div>

    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/jquery-1.12.4.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/bootstrap.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/smoothscroll.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/owl.carousel.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/theia-sticky-sidebar.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/counter-box.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/stellar.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/moment.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/jquery-ui.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/daterangepicker.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/daterangepicker.min-date.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/jquery.thim-content-slider.min.js"></script>
    <script src="{{asset('frontend')}}/js/theme-customs.js"></script>

    <script src="{{asset('frontend')}}/js/libs/revolution/jquery.themepunch.tools.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/revolution/jquery.themepunch.revolution.min.js"></script>

    <script src="{{asset('frontend')}}/js/libs/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="{{asset('frontend')}}/js/libs/revolution/extensions/revolution.extension.video.min.js"></script>
    <script>function setREVStartSize(e) {
            try {
                e.c = jQuery(e.c);
                var i = jQuery(window).width(), t = 9999, r = 0, n = 0, l = 0, f = 0, s = 0, h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                    f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function (e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({ height: f })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };</script>
    <script>
        var revapi4,
            tpj;
        (function () {
            if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad); else onLoad();

            function onLoad() {
                if (tpj === undefined) {
                    tpj = jQuery;
                    if ("off" == "on") tpj.noConflict();
                }
                if (tpj("#rev_slider_4_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_4_1");
                } else {
                    revapi4 = tpj("#rev_slider_4_1").show().revolution({
                        sliderType: "standard",
                        sliderLayout: "fullwidth",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "default",
                            onHoverStop: "off",
                            arrows: {
                                style: "zeus",
                                enable: true,
                                hide_onmobile: false,
                                hide_onleave: false,
                                tmp: '<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 30,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 20,
                                    v_offset: 0
                                }
                            }
                            ,
                            bullets: {
                                enable: true,
                                hide_onmobile: false,
                                style: "hermes",
                                hide_onleave: false,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 100,
                                space: 10,
                                tmp: ''
                            }
                        },
                        viewPort: {
                            enable: true,
                            outof: "wait",
                            visible_area: "80%",
                            presize: false
                        },
                        responsiveLevels: [1240, 1024, 778, 480],
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: [1240, 1024, 778, 480],
                        gridheight: [672, 600, 500, 400],
                        lazyType: "none",
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                }
                ;
                /* END OF revapi call */

            };
            /* END OF ON LOAD FUNCTION */
        }());
        /* END OF WRAPPING FUNCTION */
    </script>
    <script>
        var d = new Date();
        document.getElementById("day").setAttribute('value', (d.getDate()) + '.');
        document.getElementById("month").setAttribute('value', format_month());
        document.getElementById("multidate").setAttribute('value', format_full());

        document.getElementById("day2").setAttribute('value', (d.getDate() + 1) + '.');
        document.getElementById("month2").setAttribute('value', format_month());

        function format_full() {
            var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'September', 'November', 'December'];
            return months[d.getMonth()] + ' ' + d.getDate() + ', ' + d.getFullYear();
        }
        function format_month() {
            var months = ['Jan', 'Feb', 'March', 'April', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            return months[d.getMonth()] + '. ' + d.getFullYear();
        }

    </script>
</body>

</html>
