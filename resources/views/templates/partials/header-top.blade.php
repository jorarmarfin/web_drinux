<div id="Action_bar">
    <div class="container">
        <div class="column one">
            <!-- Header - contact info area-->
            <ul class="contact_details">
                {{-- <li class="slogan">
                    Tiene alguna pregunta llamanos?
                </li> --}}
                {{-- <li class="phone">
                    <i class="icon-phone"></i><a href="tel:+61383766284">(+511) 732 7055</a>
                </li> --}}
                {{-- <li class="mail">
                    <i class="icon-mail-line"></i><a href="mailto:{{ $configuracion->email }}">{{ $configuracion->email }}</a>
                </li> --}}
            </ul>
            <!--Social info area-->
            <ul class="social">
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
                <li class="phone">
                    <i class="icon-phone"></i><a href="tel:+61383766284" style="color: #fbd200;">(+511) 732 7055</a>
                </li>
            </ul>
        </div>
    </div>
</div>
