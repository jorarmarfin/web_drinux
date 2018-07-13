<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Laravel</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Fonts -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>

        <!-- Styles -->
        @include('templates.partials.css')

        <!-- Revolution Slider -->
        <link rel="stylesheet" href="plugins/rs-plugin/css/settings.css">

        <!-- Favicons -->
        <link rel="shortcut icon" href="images/favicon.ico">

    </head>
    <body class="page-parent template-slider color-blue layout-full-width header-classic subheader-transparent sticky-header sticky-white subheader-title-left">
        <!-- Main Theme Wrapper -->
        <div id="Wrapper">
            <!-- Header Wrapper -->
            <div id="Header_wrapper">
                <!-- Header -->
                <header id="Header">
                    @include('templates.partials.header-top')
                    @include('templates.partials.header')
                    @include('templates.partials.slider')
                </header>
            </div>
            <!-- Main Content -->
            <div id="Content">
                <div class="content_wrapper clearfix">
                    <div class="sections_group">
                        <div class="entry-content">
                            <div class="section flv_sections_6" id="start">
                                <div class="section_wrapper clearfix">
                                    <div class="items_group clearfix">
                                        <!-- One Third (1/3) Column -->
                                        <div class="column one-third column_icon_box">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="fadeInLeftLarge">
                                                <div class="icon_box icon_position_top has_border">
                                                    <a class="scroll" href="#thematic-websites">
                                                        <div class="icon_wrapper">
                                                            <div class="icon">
                                                                <i class="icon-lightbulb-line"></i>
                                                            </div>
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <h4> 240+ pre-made layouts</h4>
                                                            <div class="desc">
                                                                We created awesome <span class="tooltip" data-tooltip="Click to scroll down"> 240+ pre-made layouts</span> .
                                                                <br> Choose one of them and use for own business site.
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- One Third (1/3) Column -->
                                        <div class="column one-third column_icon_box">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="zoomIn">
                                                <div class="icon_box icon_position_top has_border">
                                                    <a  href="#">
                                                        <div class="icon_wrapper">
                                                            <div class="icon">
                                                                <i class="icon-beaker-line"></i>
                                                            </div>
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <h4>Fully customizable</h4>
                                                            <div class="desc">
                                                                Don`t waste your time and within minutes create
                                                                <br> your website easily. You will love it!
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- One Third (1/3) Column -->
                                        <div class="column one-third column_icon_box">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="fadeInRightLarge">
                                                <div class="icon_box icon_position_top no_border">
                                                    <a  href="http://support.BeantownThemes.com" target="_blank">
                                                        <div class="icon_wrapper">
                                                            <div class="icon">
                                                                <i class="icon-comment-line"></i>
                                                            </div>
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <h4>Free support &amp; updates</h4>
                                                            <div class="desc">
                                                                This theme is always updated on time.
                                                                <br> We also offer <span class="tooltip" data-tooltip="For support please visit theme forum">free support</span> for all our themes!
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section flv_sections_5">
                                <div class="section_wrapper clearfix">
                                    <div class="items_group clearfix">
                                        <!-- Page Title-->
                                        <!-- One full width row-->
                                        <div class="column one column_fancy_heading">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <h2 class="title">Why you'll love our theme?</h2>
                                            </div>
                                        </div>
                                        <!-- One Fourth (1/4) Column -->
                                        <div class="column one-fourth column_quick_fact">
                                            <!-- Counter area-->
                                            <div class="quick_fact animate-math">
                                                <!-- Animated area -->
                                                <div class="animate" data-anim-type="bounceIn">
                                                    <div class="number" data-to="400">
                                                        0
                                                    </div>
                                                    <h3 class="title">homepages</h3>
                                                    <hr class="hr_narrow" />
                                                    <div class="desc"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- One Fourth (1/4) Column -->
                                        <div class="column one-fourth column_quick_fact">
                                            <!-- Counter area-->
                                            <div class="quick_fact animate-math">
                                                <!-- Animated area -->
                                                <div class="animate" data-anim-type="bounceIn">
                                                    <div class="number" data-to="200">
                                                        0
                                                    </div>
                                                    <h3 class="title">shortcodes &amp; items</h3>
                                                    <hr class="hr_narrow" />
                                                    <div class="desc"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- One Fourth (1/4) Column -->
                                        <div class="column one-fourth column_quick_fact">
                                            <!-- Counter area-->
                                            <div class="quick_fact animate-math">
                                                <!-- Animated area -->
                                                <div class="animate" data-anim-type="bounceIn">
                                                    <div class="number" data-to="9518">
                                                        0
                                                    </div>
                                                    <h3 class="title">happy clients</h3>
                                                    <hr class="hr_narrow" />
                                                    <div class="desc"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- One Fourth (1/4) Column -->
                                        <div class="column one-fourth column_quick_fact">
                                            <!-- Counter area-->
                                            <div class="quick_fact animate-math">
                                                <!-- Animated area -->
                                                <div class="animate" data-anim-type="bounceIn">
                                                    <div class="number" data-to="21">
                                                        0
                                                    </div>
                                                    <h3 class="title">different pages</h3>
                                                    <hr class="hr_narrow" />
                                                    <div class="desc"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section flv_sections_4">
                                <div class="section_wrapper clearfix">
                                    <div class="items_group clearfix">
                                        <!-- Page Title-->
                                        <!-- One full width row-->
                                        <div class="column one column_fancy_heading">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <!-- Animated area -->
                                                <div class="animate" data-anim-type="zoomInLeftLarge">
                                                    <span class="icon_top"><i class="icon-map"></i></span>
                                                    <h2 class="title">Guide for shortcodes</h2>
                                                    <div class="inside">
                                                        <span class="big">See quick guide about some of included shortcodes and muffin builder items. We got over 200 in total.</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- One Second (1/2) Column -->
                                        <div class="column one-second column_column">
                                            <div class="column_attr ">
                                                <span class="big">Building websites was never so powerful and easy! Over 200 included shortcodes and items gives you possibility to build <a href="#thematic-websites" class="scroll">any kind of website</a>. Choose between manual building and Drag&amp;Drop Muffin Builder tool. You don`t need to be advanced user anymore.</span>
                                            </div>
                                        </div>
                                        <!-- One Fourth (1/4) Column -->
                                        <div class="column one-fourth column_column">
                                            <div class="column_attr animate" data-anim-type="zoomIn">
                                                <div class="aligncenter"><img src="images/icon_muffin_options.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- One Fourth (1/4) Column -->
                                        <div class="column one-fourth column_column">
                                            <div class="column_attr animate" data-anim-type="zoomIn">
                                                <div class="aligncenter"><img src="images/icon_muffin_builder.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- One full width row-->
                                        <div class="column one column_slider">
                                            <!-- Slider Content -->
                                            <div class="content_slider ">
                                                <ul class="content_slider_ul">
                                                    <li class="content_slider_li_1">
                                                        <a href="typography.html"><img width="890" height="470" src="images/shortcodes_slider_1.jpg" class="scale-with-grid wp-post-image" alt="shortcodes_slider_1" />
                                                        </a>
                                                    </li>
                                                    <li class="content_slider_li_2">
                                                        <a href="boxes-infographics.html"><img width="890" height="470" src="images/shortcodes_slider_2.jpg" class="scale-with-grid wp-post-image" alt="shortcodes_slider_2" />
                                                        </a>
                                                    </li>
                                                    <li class="content_slider_li_3">
                                                        <a href="content-blocks.html"><img width="890" height="470" src="images/shortcodes_slider_3.jpg" class="scale-with-grid wp-post-image" alt="shortcodes_slider_3" />
                                                        </a>
                                                    </li>
                                                    <li class="content_slider_li_4">
                                                        <a href="content-elements.html"><img width="890" height="470" src="images/shortcodes_slider_4.jpg" class="scale-with-grid wp-post-image" alt="shortcodes_slider_4" />
                                                        </a>
                                                    </li>
                                                    <li class="content_slider_li_5">
                                                        <a href="loops.html"><img width="890" height="470" src="images/shortcodes_slider_5.jpg" class="scale-with-grid wp-post-image" alt="shortcodes_slider_5" />
                                                        </a>
                                                    </li>
                                                </ul><a class="button button_js slider_prev" href="#"><span class="button_icon"><i class="icon-left-open-big"></i></span></a><a class="button button_js slider_next" href="#"><span class="button_icon"><i class="icon-right-open-big"></i></span></a>
                                                <div class="slider_pagination"></div>
                                            </div>
                                        </div>
                                        <!-- One full width row-->
                                        <div class="column one column_column">
                                            <div class="column_attr ">
                                                <div class="aligncenter">
                                                    <a class="button button_left button_theme button_js" href="typography.html"><span class="button_icon"><i class="icon-heart-fa"></i></span><span class="button_label">See all shortcodes</span></a><a class="button button_left button_js" href="https://www.youtube.com/watch?v=z7lRTlJVeT8" target="_blank"><span class="button_icon"><i class="icon-layout"></i></span><span class="button_label">How Muffin Builder works?</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Page devider -->
                                        <!-- One full width row-->
                                        <div class="column one column_divider">
                                            <hr class="flv_margin_b_35" />
                                        </div>
                                        <!-- Page Title-->
                                        <!-- One full width row-->
                                        <div class="column one column_fancy_heading">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <!-- Animated area -->
                                                <div class="animate" data-anim-type="zoomInLeftLarge">
                                                    <h2 class="title">Still not sure? See our <span id="thematic-websites" class="themecolor">latest demos</span></h2>
                                                    <div class="inside">
                                                        <span class="big">We have created 200+ layouts that perfectly fit to your type of business. Choose own and use within minutes.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section full-width flv_sections_3">
                                <div class="section_wrapper clearfix">
                                    <div class="items_group clearfix">
                                        <!-- One full width row-->
                                        <div class="column one column_offer">
                                            <div class="offer">
                                                <ul class="offer_ul">
                                                    <li class="offer_li">
                                                        <div class="image_wrapper"><img width="952" height="537" src="images/be-photo.jpg" class="scale-with-grid wp-post-image" alt="be-photo" />
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <div class="title">
                                                                <h3><span class="flv_photo_color" >Be|</span>photo</h3><a href="index-photo.html" class="button button_js" target="_blank"><span class="button_icon"><i class="icon-layout"></i></span><span class="button_label">View demo</span></a>
                                                            </div>
                                                            <div class="desc">
                                                                <p>
                                                                    <span class="big">Vitae adipiscing turpis. Aenean ligula nibh, mo lest ie id viverra a, dapibus at dolor. In iaculis viverra ne que, ac eleifend ante lobortis.</span>
                                                                </p>
                                                                <div class="hr_dots">
                                                                    <span></span><span></span><span></span>
                                                                </div>
                                                                <h5>Additional features:</h5>
                                                                <ul class="list_mixed">
                                                                    <li class="list_check">
                                                                        Beautiful, full width slider.
                                                                    </li>
                                                                    <li class="list_star">
                                                                        Simple menu with logo.
                                                                    </li>
                                                                </ul>
                                                                <div class="idea_box">
                                                                    <div class="icon">
                                                                        <i class="icon-lamp"></i>
                                                                    </div>
                                                                    <div class="desc">
                                                                        We recommend <a href="index-photo.html" target="_blank">this version</a> for business related with photos or images, like: <strong>photographers</strong>, <strong>hairdressers</strong>, <strong>artists </strong>and other.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="offer_li">
                                                        <div class="image_wrapper"><img width="952" height="537" src="images/be-agency.jpg" class="scale-with-grid wp-post-image" alt="be-agency" />
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <div class="title">
                                                                <h3><span class="flv_agency_color" >Be|</span>agency</h3><a href="index-agency.html" class="button button_js" target="_blank"><span class="button_icon"><i class="icon-layout"></i></span><span class="button_label">View demo</span></a>
                                                            </div>
                                                            <div class="desc">
                                                                <p>
                                                                    <span class="big">Vitae adipiscing turpis. Aenean ligula nibh, mo lest ie id viverra a, dapibus at dolor. In iaculis viverra ne que, ac eleifend ante lobortis.</span>
                                                                </p>
                                                                <div class="hr_dots">
                                                                    <span></span><span></span><span></span>
                                                                </div>
                                                                <h5>Additional features:</h5>
                                                                <ul class="list_mixed">
                                                                    <li class="list_check">
                                                                        Creative menu on the left side with backgrounds for mega menu.
                                                                    </li>
                                                                    <li class="list_star">
                                                                        Slider with background video.
                                                                    </li>
                                                                </ul>
                                                                <div class="idea_box">
                                                                    <div class="icon">
                                                                        <i class="icon-lamp"></i>
                                                                    </div>
                                                                    <div class="desc">
                                                                        We recommend <a href="index-agency.html" target="_blank">this version</a> for business related with agencies, like: <strong>creative agencies</strong>, <strong>designers, artists </strong>and other.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="offer_li">
                                                        <div class="image_wrapper"><img width="952" height="537" src="images/be-design.jpg" class="scale-with-grid wp-post-image" alt="be-design" />
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <div class="title">
                                                                <h3><span class="flv_design_color" >Be|</span>design</h3><a href="index-design.html" class="button button_js" target="_blank"><span class="button_icon"><i class="icon-layout"></i></span><span class="button_label">View demo</span></a>
                                                            </div>
                                                            <div class="desc">
                                                                <p>
                                                                    <span class="big">Vitae adipiscing turpis. Aenean ligula nibh, mo lest ie id viverra a, dapibus at dolor. In iaculis viverra ne que, ac eleifend ante lobortis.</span>
                                                                </p>
                                                                <div class="hr_dots">
                                                                    <span></span><span></span><span></span>
                                                                </div>
                                                                <h5>Additional features:</h5>
                                                                <ul class="list_mixed">
                                                                    <li class="list_check">
                                                                        Creative menu on the left side.
                                                                    </li>
                                                                    <li class="list_star">
                                                                        Great portfolio with awesome layout.
                                                                    </li>
                                                                </ul>
                                                                <div class="idea_box">
                                                                    <div class="icon">
                                                                        <i class="icon-lamp"></i>
                                                                    </div>
                                                                    <div class="desc">
                                                                        We recommend <a href="index-design.html" target="_blank">this version</a> for business related with portfolios, like: <strong>designers</strong>, <strong>architects </strong>and other.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="offer_li">
                                                        <div class="image_wrapper"><img width="952" height="537" src="images/be-press.jpg" class="scale-with-grid wp-post-image" alt="be-press" />
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <div class="title">
                                                                <h3><span class="flv_press_color" >Be|</span>press</h3><a href="index-press.html" class="button button_js" target="_blank"><span class="button_icon"><i class="icon-layout"></i></span><span class="button_label">View demo</span></a>
                                                            </div>
                                                            <div class="desc">
                                                                <p>
                                                                    <span class="big">Vitae adipiscing turpis. Aenean ligula nibh, mo lest ie id viverra a, dapibus at dolor. In iaculis viverra ne que, ac eleifend ante lobortis.</span>
                                                                </p>
                                                                <div class="hr_dots">
                                                                    <span></span><span></span><span></span>
                                                                </div>
                                                                <h5>Additional features:</h5>
                                                                <ul class="list_mixed">
                                                                    <li class="list_check">
                                                                        Magazine style with Ads banners and sidebar on the right.
                                                                    </li>
                                                                    <li class="list_star">
                                                                        Magazine header style with banner at the top.
                                                                    </li>
                                                                </ul>
                                                                <div class="idea_box">
                                                                    <div class="icon">
                                                                        <i class="icon-lamp"></i>
                                                                    </div>
                                                                    <div class="desc">
                                                                        We recommend <a href="index-press.html" target="_blank">this version</a> for business related with press, like: <strong>magazines</strong>, <strong>e-newspapers </strong>and other.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="offer_li">
                                                        <div class="image_wrapper"><img width="952" height="537" src="images/be-spa.jpg" class="scale-with-grid wp-post-image" alt="be-spa" />
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <div class="title">
                                                                <h3><span class="flv_spa_color" >Be|</span>spa</h3><a href="index-spa.html" class="button button_js" target="_blank"><span class="button_icon"><i class="icon-layout"></i></span><span class="button_label">View demo</span></a>
                                                            </div>
                                                            <div class="desc">
                                                                <p>
                                                                    <span class="big">Vitae adipiscing turpis. Aenean ligula nibh, mo lest ie id viverra a, dapibus at dolor. In iaculis viverra ne que, ac eleifend ante lobortis.</span>
                                                                </p>
                                                                <div class="hr_dots">
                                                                    <span></span><span></span><span></span>
                                                                </div>
                                                                <h5>Additional features:</h5>
                                                                <ul class="list_mixed">
                                                                    <li class="list_check">
                                                                        Transparent menu with large image at the top.
                                                                    </li>
                                                                    <li class="list_star">
                                                                        New item called &#8220;Flat box&#8221;.
                                                                    </li>
                                                                </ul>
                                                                <div class="idea_box">
                                                                    <div class="icon">
                                                                        <i class="icon-lamp"></i>
                                                                    </div>
                                                                    <div class="desc">
                                                                        We recommend <a href="index-spa.html" target="_blank">this version</a> for business related with beauty, like: <strong>spa</strong>, <strong>beauty offices </strong>and other.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="offer_li">
                                                        <div class="image_wrapper"><img width="952" height="537" src="images/be-university.jpg" class="scale-with-grid wp-post-image" alt="be-university" />
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <div class="title">
                                                                <h3><span class="flv_university_color" >Be|</span>university</h3><a href="index-university.html" class="button button_js" target="_blank"><span class="button_icon"><i class="icon-layout"></i></span><span class="button_label">View demo</span></a>
                                                            </div>
                                                            <div class="desc">
                                                                <p>
                                                                    <span class="big">Vitae adipiscing turpis. Aenean ligula nibh, mo lest ie id viverra a, dapibus at dolor. In iaculis viverra ne que, ac eleifend ante lobortis.</span>
                                                                </p>
                                                                <div class="hr_dots">
                                                                    <span></span><span></span><span></span>
                                                                </div>
                                                                <h5>Additional features:</h5>
                                                                <ul class="list_mixed">
                                                                    <li class="list_check">
                                                                        Classic header style.
                                                                    </li>
                                                                    <li class="list_star">
                                                                        Different tabs and recent posts.
                                                                    </li>
                                                                </ul>
                                                                <div class="idea_box">
                                                                    <div class="icon">
                                                                        <i class="icon-lamp"></i>
                                                                    </div>
                                                                    <div class="desc">
                                                                        We recommend <a href="index-university.html" target="_blank">this version</a> for business related with teaching, like: <strong>universities</strong>, <strong>language schools </strong>and other.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="offer_li">
                                                        <div class="image_wrapper"><img width="952" height="537" src="images/be-carrental.jpg" class="scale-with-grid wp-post-image" alt="be-carrental" />
                                                        </div>
                                                        <div class="desc_wrapper">
                                                            <div class="title">
                                                                <h3><span class="flv_carrental_color" >Be|</span>CarRental</h3><a href="index-carrental.html" class="button button_js" target="_blank"><span class="button_icon"><i class="icon-layout"></i></span><span class="button_label">View demo</span></a>
                                                            </div>
                                                            <div class="desc">
                                                                <p>
                                                                    <span class="big">Vitae adipiscing turpis. Aenean ligula nibh, mo lest ie id viverra a, dapibus at dolor. In iaculis viverra ne que, ac eleifend ante lobortis.</span>
                                                                </p>
                                                                <div class="hr_dots">
                                                                    <span></span><span></span><span></span>
                                                                </div>
                                                                <h5>Additional features:</h5>
                                                                <ul class="list_mixed">
                                                                    <li class="list_check">
                                                                        Nice transparent header style.
                                                                    </li>
                                                                    <li class="list_star">
                                                                        Great pricing items tailored especially for this page.
                                                                    </li>
                                                                </ul>
                                                                <div class="idea_box">
                                                                    <div class="icon">
                                                                        <i class="icon-lamp"></i>
                                                                    </div>
                                                                    <div class="desc">
                                                                        We recommend <a href="index-carrental.html" target="_blank">this version</a> for business related with rentals, like: <strong>car rents</strong>, <strong>boat rents </strong>and other.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul><a class="button button_large button_js slider_prev" href="#"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>
                                                <div class="slider_pagination">
                                                    <span class="current">1</span> / <span class="count">1</span>
                                                </div><a class="button button_large button_js slider_next" href="#"><span class="button_icon"><i class="icon-down-open-big"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section dark flv_sections_2">
                                <div class="section_wrapper clearfix">
                                    <div class="items_group clearfix">
                                        <!-- One full width row-->
                                        <div class="column one column_call_to_action">
                                            <div class="call_to_action">
                                                <!-- Animated area -->
                                                <div class="animate" data-anim-type="zoomIn">
                                                    <div class="call_to_action_wrapper">
                                                        <div class="call_left">
                                                            <h3>Watch our video tutorial</h3>
                                                        </div>
                                                        <div class="call_center">
                                                            <a href="https://www.youtube.com/watch?v=ZACc1L9oXkI"  rel="prettyphoto"><span class="icon_wrapper"><i class="icon-play"></i></span></a>
                                                        </div>
                                                        <div class="call_right">
                                                            <div class="desc">
                                                                If you prefer to learn from video tutorials, please click on the icon next to and watch video "How to re-create demo page" with step by step instructions. This is so easy!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section flv_sections_1" id="ecommerce_ready">
                                <div class="section_wrapper clearfix">
                                    <div class="items_group clearfix">
                                        <!-- Page Title-->
                                        <!-- One full width row-->
                                        <div class="column one column_fancy_heading">
                                            <div class="fancy_heading fancy_heading_icon">
                                                <!-- Animated area -->
                                                <div class="animate" data-anim-type="zoomInLeftLarge">
                                                    <h2 class="title">Ready for e-commerce</h2>
                                                    <div class="inside">
                                                        <span class="big">Create own online store and start earning money. Your customers will love design and usability.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- One Third (1/3) Column -->
                                        <div class="column one-third column_list">
                                            <div class="list_item lists_3 clearfix">
                                                <!-- Animated area -->
                                                <div class="animate" data-anim-type="fadeInLeft">
                                                    <div class="list_left list_icon">
                                                        <i class="icon-tag"></i>
                                                    </div>
                                                    <div class="list_right">
                                                        <h4>Install WooCommerce</h4>
                                                        <div class="desc">
                                                            Download and install WooCommerce plugin. This tool is easy in use and got tons of configuration possibilities.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- One Third (1/3) Column -->
                                        <div class="column one-third column_list">
                                            <div class="list_item lists_3 clearfix">
                                                <!-- Animated area -->
                                                <div class="animate" data-anim-type="fadeInRight">
                                                    <div class="list_left list_icon">
                                                        <i class="icon-picture"></i>
                                                    </div>
                                                    <div class="list_right">
                                                        <h4>Upload products</h4>
                                                        <div class="desc">
                                                            Just upload products with good looking images. Also setup options like shipping, costs and other stuff.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Page devider -->
                                        <!-- One full width row-->
                                        <div class="column one column_divider">
                                            <hr class="no_line" />
                                        </div>
                                        <!-- One Third (1/3) Column -->
                                        <div class="column one-third column_list">
                                            <div class="list_item lists_3 clearfix">
                                                <!-- Animated area -->
                                                <div class="animate" data-anim-type="fadeInLeft">
                                                    <div class="list_left list_icon">
                                                        <i class="icon-chart-line"></i>
                                                    </div>
                                                    <div class="list_right">
                                                        <h4>Increase sales</h4>
                                                        <div class="desc">
                                                            Increase sales like never before. Lot`s of users got up to 200% because of nice design and usability.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- One Third (1/3) Column -->
                                        <div class="column one-third column_list">
                                            <div class="list_item lists_3 clearfix">
                                                <!-- Animated area -->
                                                <div class="animate" data-anim-type="fadeInRight">
                                                    <div class="list_left list_icon">
                                                        <i class="icon-users"></i>
                                                    </div>
                                                    <div class="list_right">
                                                        <h4>Get satisfied customers</h4>
                                                        <div class="desc">
                                                            Happy client is good client. Customer who enjoy your shop will recommend it to his friends.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section dark flv_section">
                                <div class="section_wrapper clearfix">
                                    <div class="items_group clearfix">
                                        <!-- Page Title-->
                                        <!-- One full width row-->
                                        <div class="column one column_fancy_heading">
                                            <div class="fancy_heading fancy_heading_line">
                                                <span class="slogan">That's not all ...</span>
                                                <h2 class="title">Our other awesome core features</h2>
                                            </div>
                                        </div>
                                        <!-- One full width row-->
                                        <div class="column one column_feature_list">
                                            <div class="feature_list">
                                                <ul>
                                                    <li>
                                                        <!-- Animated area -->
                                                        <div class="animate" data-anim-type="zoomIn">
                                                            <a href="#"><span class="icon"><i class="icon-tools"></i></span>
                                                                <p>
                                                                    Best Muffin Options panel
                                                                </p></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <!-- Animated area -->
                                                        <div class="animate" data-anim-type="zoomIn">
                                                            <a href="#"><span class="icon"><i class="icon-cog"></i></span>
                                                                <p>
                                                                    Easy and fast Muffin Builder
                                                                </p></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <!-- Animated area -->
                                                        <div class="animate" data-anim-type="zoomIn">
                                                            <a href="#"><span class="icon"><i class="icon-pencil"></i></span>
                                                                <p>
                                                                    One click skin generator
                                                                </p></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <!-- Animated area -->
                                                        <div class="animate" data-anim-type="zoomIn">
                                                            <a href="#"><span class="icon"><i class="icon-globe"></i></span>
                                                                <p>
                                                                    WordPress Multilingual ready
                                                                </p></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <!-- Animated area -->
                                                        <div class="animate" data-anim-type="zoomIn">
                                                            <a href="#"><span class="icon"><i class="icon-flag"></i></span>
                                                                <p>
                                                                    Built-in Translator
                                                                </p></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <!-- Animated area -->
                                                        <div class="animate" data-anim-type="zoomIn">
                                                            <a href="#"><span class="icon"><i class="icon-infinity"></i></span>
                                                                <p>
                                                                    Unlimited layouts
                                                                </p></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <!-- Animated area -->
                                                        <div class="animate" data-anim-type="zoomIn">
                                                            <a href="#"><span class="icon"><i class="icon-code"></i></span>
                                                                <p>
                                                                    200+ builder items/shortcodes
                                                                </p></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <!-- Animated area -->
                                                        <div class="animate" data-anim-type="zoomIn">
                                                            <a href="#"><span class="icon"><i class="icon-picture"></i></span>
                                                                <p>
                                                                    Revolution Slider included
                                                                </p></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <!-- Animated area -->
                                                        <div class="animate" data-anim-type="zoomIn">
                                                            <a href="#"><span class="icon"><i class="icon-palette"></i></span>
                                                                <p>
                                                                    Unlimited colors
                                                                </p></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <!-- Animated area -->
                                                        <div class="animate" data-anim-type="zoomIn">
                                                            <a href="#"><span class="icon"><i class="icon-docs"></i></span>
                                                                <p>
                                                                    Outstanding documentation
                                                                </p></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <!-- Animated area -->
                                                        <div class="animate" data-anim-type="zoomIn">
                                                            <a href="#"><span class="icon"><i class="icon-help"></i></span>
                                                                <p>
                                                                    and much more...
                                                                </p></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- One full width row-->
                                        <div class="column one column_column">
                                            <div class="column_attr ">
                                                <div class="aligncenter">
                                                    <a class="button button_left button_theme button_js" href="typography.html"><span class="button_icon"><i class="icon-heart-fa"></i></span><span class="button_label">Typography</span></a>   <a class="button button_left button_js" href="boxes-infographics.html"><span class="button_icon"><i class="icon-layout"></i></span><span class="button_label">Boxes &amp; Infographics</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer-->
            <footer id="Footer" class="clearfix">
                <!-- Footer - First area -->
                <div class="footer_action">
                    <div class="container">
                        <!-- One full width row-->
                        <div class="column one column_column">
                            <a href="http://bit.ly/1M6lijQ" class="flv_footer_grey" target="_blank"><span class="flv_font_18">If you are interested in <span class="themecolor">Be|</span><span class="flv_color_white">theme</span>, do not wait and <span class="flv_color_white">BUY IT NOW!</span></span></a>
                        </div>
                    </div>
                </div>
                <div class="widgets_wrapper">
                    <div class="container">
                        <div class="one-fourth column">
                            <!-- Text Area -->
                            <aside id="text-7" class="widget widget_text">
                                <div class="textwidget"><img src="images/logo_footer.png" alt="">
                                    <p>
                                        <span class="big">We love who we are and we are very proud to be the part of your business</span>
                                    </p>
                                    <p>
                                        Curabitur sit amet magna quam. Praesent in libero vel <span class="tooltip" data-tooltip="Quis accumsan dolor">turpis pellentesque</span> egestas sit amet vel nunc. Nunc lobortis dui neque quis.
                                    </p><a href="#" class="icon_bar icon_bar_facebook icon_bar_small"><span class="t"><i class="icon-facebook"></i></span><span class="b"><i class="icon-facebook"></i></span></a><a href="#" class="icon_bar icon_bar_google icon_bar_small"><span class="t"><i class="icon-gplus"></i></span><span class="b"><i class="icon-gplus"></i></span></a><a href="#" class="icon_bar icon_bar_twitter icon_bar_small"><span class="t"><i class="icon-twitter"></i></span><span class="b"><i class="icon-twitter"></i></span></a><a href="#" class="icon_bar icon_bar_vimeo icon_bar_small"><span class="t"><i class="icon-vimeo"></i></span><span class="b"><i class="icon-vimeo"></i></span></a><a href="#" class="icon_bar icon_bar_youtube icon_bar_small"><span class="t"><i class="icon-play"></i></span><span class="b"><i class="icon-play"></i></span></a>
                                </div>
                            </aside>
                        </div>
                        <div class="one-fourth column">
                            <!-- Recent Comments Area -->
                            <aside class="widget widget_mfn_recent_comments">
                                <h4>Recent comments</h4>
                                <div class="Recent_comments">
                                    <ul>
                                        <li>
                                            <span class="date_label">March 31, 2015</span>
                                            <p>
                                                <i class="icon-user"></i><strong>Muffin Group</strong> commented on <a href="blog-single-content-builder.html#comment-7" title="Muffin Group | Content builder for posts">Content builder for posts</a>
                                            </p>
                                        </li>
                                        <li>
                                            <span class="date_label">March 31, 2015</span>
                                            <p>
                                                <i class="icon-user"></i><strong>Muffin Group</strong> commented on <a href="blog-single-content-builder.html#comment-6" title="Muffin Group | Content builder for posts">Content builder for posts</a>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="one-fourth column">
                            <!-- Recent posts -->
                            <aside class="widget widget_mfn_recent_posts">
                                <h4>Latest posts</h4>
                                <div class="Recent_posts">
                                    <ul>
                                        <li class="post ">
                                            <a href="blog-single-content-builder.html">
                                                <div class="photo"><img width="80" height="80" src="images/beauty_portfolio_2-80x80.jpg" class="scale-with-grid wp-post-image" alt="beauty_portfolio_2" /><span class="c">4</span>
                                                </div>
                                                <div class="desc">
                                                    <h6>Content builder for posts</h6><span class="date"><i class="icon-clock"></i>May 13, 2015</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="post format-image">
                                            <a href="blog-single-vertical-photo.html">
                                                <div class="photo"><img width="80" height="80" src="images/blog_vertical-80x80.jpg" class="scale-with-grid wp-post-image" alt="blog_vertical" /><span class="c">0</span>
                                                </div>
                                                <div class="desc">
                                                    <h6>Post with vertical photo</h6><span class="date"><i class="icon-clock"></i>May 13, 2015</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="one-fourth column">
                            <!-- Text Area -->
                            <aside id="text-8" class="widget widget_text">
                                <h4>Some features</h4>
                                <div class="textwidget">
                                    <ul class="list_mixed">
                                        <li class="list_check">
                                            Suspendisse a pellentesque dui, non felis.
                                        </li>
                                        <li class="list_star">
                                            Quisque lorem tortor fringilla sed.
                                        </li>
                                        <li class="list_idea">
                                            Quisque cursus et, porttitor risus.
                                        </li>
                                        <li class="list_check">
                                            Nulla ipsum dolor lacus, suscipit.
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
                <!-- Footer copyright-->
                <div class="footer_copy">
                    <div class="container">
                        <div class="column one">
                            <a id="back_to_top" href="#" class="button button_left button_js"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>
                            <div class="copyright">
                                &copy; 2017 BeTheme - Muffin group - HTML by <a href="http://bit.ly/1M6lijQ" target="_blank">BeantownThemes</a>
                            </div>
                            <!--Social info area-->
                            <ul class="social">
                                <li class="skype">
                                    <a href="#" title="Skype"><i class="icon-skype"></i></a>
                                </li>
                                <li class="facebook">
                                    <a href="https://www.facebook.com/Beantown-Themes-653197714728193" title="Facebook"><i class="icon-facebook"></i></a>
                                </li>
                                <li class="googleplus">
                                    <a href="https://plus.google.com/" title="Google+"><i class="icon-gplus"></i></a>
                                </li>
                                <li class="twitter">
                                    <a href="#" title="Twitter"><i class="icon-twitter"></i></a>
                                </li>
                                <li class="vimeo">
                                    <a href="https://vimeo.com/" title="Vimeo"><i class="icon-vimeo"></i></a>
                                </li>
                                <li class="youtube">
                                    <a href="#" title="YouTube"><i class="icon-play"></i></a>
                                </li>
                                <li class="flickr">
                                    <a href="https://www.flickr.com/" title="Flickr"><i class="icon-flickr"></i></a>
                                </li>
                                <li class="pinterest">
                                    <a href="https://www.pinterest.com/" title="Pinterest"><i class="icon-pinterest"></i></a>
                                </li>
                                <li class="dribbble">
                                    <a href="https://dribbble.com" title="Dribbble"><i class="icon-dribbble"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
@include('templates.partials.js')
</html>
