<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="{{ app()->getLocale() }}">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Drinux</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>

    <!-- CSS -->
    @include('templates.partials.css')

</head>

<body class="page-parent template-slider color-blue layout-full-width header-classic subheader-transparent sticky-header sticky-white subheader-title-left">
    <!-- Hidden Top Area -->
    @include('templates.partials.hidden-top')
    <!-- Main Theme Wrapper -->
    <div id="Wrapper">
        <!-- Header Wrapper -->
        <div id="Header_wrapper">
            <!-- Header -->
            <header id="Header">
                <!-- Header Top -  Info Area -->
                @include('templates.partials.header-top')
                <!-- Header -  Logo and Menu area -->
                @include('templates.partials.header')
                <!-- Revolution slider area-->
                @include('templates.partials.slider')
            </header>
        </div>
        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        @include('templates.partials.cotizacion')
                        @include('templates.partials.servicios')

                        <div class="section flv_sections_1" id="ecommerce_ready">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- Page Title-->
                                    <!-- One full width row-->
                                    <div class="column one column_fancy_heading">
                                        <div class="fancy_heading fancy_heading_icon">
                                            <!-- Animated area -->
                                            <div class="animate" data-anim-type="zoomInLeftLarge">
                                                <h2 class="title">Porque elegirnos</h2>
                                                <div class="inside">
                                                    <span class="big">Lorem ipsum</span>
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

    <!-- Popup contact form -->
    <div id="popup_contact">
        <a class="button button_js" href="#"><i class="icon-mail-line"></i></a>
        <div class="popup_contact_wrapper">

            <div id="contactWrapper_popup">
                <form id="contactform_popup">
                    <h4>Send us a message</h4>
                    <p>
                        <span>
                                <input type="text" name="name_popup" id="name_popup" size="40" aria-required="true" aria-invalid="false" placeholder="Your name" />
                            </span><span>
                                <input type="email" name="email_popup" id="email_popup" size="40" aria-required="true" aria-invalid="false" placeholder="Your email" />
                            </span><span>
                                <input type="text" name="subject_popup" id="subject_popup" size="40" aria-required="true" aria-invalid="false" placeholder="Subject" />
                            </span><span>                               <textarea name="body_popup" cols="40" id="body_popup" rows="2" aria-required="true" aria-invalid="false" placeholder="Message"></textarea></span>

                        <input type="button" value="Send Message" id="submit_popup" onClick="return check_values_popup();">
                    </p>
                </form>
                <div id="confirmation_popup"></div>
            </div>

            <span class="arrow"></span>
        </div>
    </div>

    <!-- JS -->
    @include('templates.partials.js')

</body>

</html>