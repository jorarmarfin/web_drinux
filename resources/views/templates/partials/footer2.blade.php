<div class="widgets_wrapper">
    <div class="container">
        {{-- <div class="one-fourth column">
            <!-- Text Area -->
            <aside id="text-7" class="widget widget_text">
                <div class="textwidget"><img src="{{ $configuracion->imagen }}" alt="">
                    {!! $configuracion->body !!}
                    @isset($configuracion->facebook)
                        <a href="{{ $configuracion->facebook }}" class="icon_bar icon_bar_facebook icon_bar_small">
                            <span class="t"><i class="icon-facebook"></i></span>
                            <span class="b"><i class="icon-facebook"></i></span>
                        </a>
                    @endisset
                    <a href="#" class="icon_bar icon_bar_google icon_bar_small">
                        <span class="t"><i class="icon-gplus"></i></span>
                        <span class="b"><i class="icon-gplus"></i></span>
                    </a>
                    <a href="#" class="icon_bar icon_bar_twitter icon_bar_small">
                        <span class="t"><i class="icon-twitter"></i></span>
                        <span class="b"><i class="icon-twitter"></i></span>
                    </a>
                    <a href="#" class="icon_bar icon_bar_vimeo icon_bar_small">
                        <span class="t"><i class="icon-vimeo"></i></span>
                        <span class="b"><i class="icon-vimeo"></i></span>
                    </a>
                    <a href="#" class="icon_bar icon_bar_youtube icon_bar_small">
                        <span class="t"><i class="icon-play"></i></span>
                        <span class="b"><i class="icon-play"></i></span>
                    </a>
                </div>
            </aside>
        </div> --}}
        <div class="one-fourth column">
            <div class="list_item lists_2 clearfix animate fadeInLeftLarge" data-anim-type="fadeInLeftLarge">
                <div class="list_left list_icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="list_right">
                    <div class="desc">
                        <p class="big" style="padding-top: 12px; display: block; margin: 0;">
                            {!! $configuracion->direccion !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="one-fourth column">
            <div class="list_item lists_2 clearfix animate fadeInLeftLarge" data-anim-type="fadeInLeftLarge">
                <div class="list_left list_icon">
                    <i class=" fas fa-phone-volume"></i>
                </div>
                <div class="list_right">
                    <div class="desc">
                        <p class="big" style="padding-top: 12px; display: block; margin: 0;">
                            {!! $configuracion->telefonos !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="one-fourth column">
            <div class="list_item lists_2 clearfix animate fadeInLeftLarge" data-anim-type="fadeInLeftLarge">
                <div class="list_left list_icon">
                    <i class=" icon-mail-line"></i>
                </div>
                <div class="list_right">
                    <div class="desc">
                        <p class="big" style="padding-top: 12px; display: block; margin: 0;">
                            <a href="{{ $configuracion->email }}">{{ $configuracion->email }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
