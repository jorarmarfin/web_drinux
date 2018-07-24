<!-- Header -  Logo and Menu area -->
<div id="Top_bar">
    <div class="container">
        <div class="column one">
            <div class="top_bar_left clearfix">
                <!-- Logo-->
                <div class="logo">
                    <a id="logo" href="{{ route('index') }}" title="Drinux"><img class="scale-with-grid" src="{{ $configuracion->imagen }}" alt="Drinux" />
                    </a>
                </div>
                <!-- Main menu-->
                @include('templates.partials.mainmenu')
                <!-- Banner area - only for certain pages-->
                <div class="banner_wrapper">
                    <a href="#" target="_blank"><img src="images/468x60.gif" alt="">
                    </a>
                </div>
                <!-- Header Searchform area-->
                <div class="search_wrapper">
                    <form method="get" action="#">
                        <i class="icon_search icon-search"></i><a href="#" class="icon_close"><i class="icon-cancel"></i></a>
                        <input type="text" class="field" name="s" placeholder="Enter your search" />
                        <input type="submit flv_disp_none" class="submit" value="" />
                    </form>
                </div>
            </div>
            {{-- <div class="top_bar_right">
                <div class="top_bar_right_wrapper">
                    <!-- Shopping cart icon-->
                    <a id="search_button" href="#"><i class="icon-search"></i></a>
                    <!--wpml flags selector-->
                    <div class="wpml-languages enabled">
                        <a class="active tooltip" href="#" data-tooltip="No translations available for this page"><img src="images/flags/en.png" alt="English" /><i class="icon-down-open-mini"></i>
                        </a>
                        <ul class="wpml-lang-dropdown">
                            <li>
                                <a href="#"><img src="images/flags/fr.png" alt="French" />
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/flags/de.png" alt="German" />
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/flags/pl.png" alt="Polish" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
