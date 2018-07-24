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
    {{-- @include('templates.partials.hidden-top') --}}
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
            </header>
        </div>
        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                    @yield('content')

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer id="Footer" class="clearfix">
            <!-- Footer - First area -->
            {{-- @include('templates.partials.footer1') --}}
            {{-- <hr class="flv_background_white"> --}}
            @include('templates.partials.footer2')
            <!-- Footer copyright-->
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <div class="copyright" style="width: 100%; text-align: center;">
                            {!! $copyright->body !!}
                        </div>
                        <a id="back_to_top" href="#" class="button button_left button_js" style="margin-top: -45px;"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>
                        <!--Social info area-->
                        {{-- <ul class="social">
                            @isset ($configuracion->skype)
                            <li class="skype">
                                <a href="#" title="Skype"><i class="icon-skype"></i></a>
                            </li>
                            @endisset
                            @isset($configuracion->facebook)
                                <li class="facebook">
                                    <a href="{{ $configuracion->facebook }}" title="Facebook"><i class="icon-facebook"></i></a>
                                </li>
                            @endisset
                            @isset($configuracion->linkedin)
                                <li class="linkedin">
                                    <a href="{{ $configuracion->linkedin }}" title="linkedin"><i class="icon-linkedin"></i></a>
                                </li>
                            @endisset
                            @isset($configuracion->googleplus)
                                <li class="googleplus">
                                    <a href="https://plus.google.com/" title="Google+"><i class="icon-gplus"></i></a>
                                </li>
                            @endisset
                            @isset($configuracion->twiter)
                            <li class="twitter">
                                <a href="#" title="Twitter"><i class="icon-twitter"></i></a>
                            </li>
                            @endisset
                            @isset($configuracion->vimeo)
                            <li class="vimeo">
                                <a href="https://vimeo.com/" title="Vimeo"><i class="icon-vimeo"></i></a>
                            </li>
                            @endisset
                            @isset($configuracion->youtube)
                            <li class="youtube">
                                <a href="#" title="YouTube"><i class="icon-play"></i></a>
                            </li>
                            @endisset
                            @isset($configuracion->flickr)
                            <li class="flickr">
                                <a href="https://www.flickr.com/" title="Flickr"><i class="icon-flickr"></i></a>
                            </li>
                            @endisset
                            @isset($configuracion->pinterest)
                            <li class="pinterest">
                                <a href="https://www.pinterest.com/" title="Pinterest"><i class="icon-pinterest"></i></a>
                            </li>
                            @endisset
                            @isset($configuracion->dribbble)
                            <li class="dribbble">
                                <a href="https://dribbble.com" title="Dribbble"><i class="icon-dribbble"></i></a>
                            </li>
                            @endisset
                        </ul> --}}
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