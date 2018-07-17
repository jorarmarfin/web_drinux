                        <div class="section mcb-section dark" style="padding-top:80px; padding-bottom:40px; background-color:#3e414c; background-image:url(images/home_betheme_sectionbg4.png); background-repeat:no-repeat; background-position:center top">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_fancy_heading">
                                            <div class="fancy_heading fancy_heading_line">
                                                <span class="slogan">Trabajamos con</span>
                                                <h2 class="title">Tecnologías</h2>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_feature_list">
                                            <div class="feature_list " data-col="4" >
                                                <ul>
                                                    @foreach ($tecnologias as $tec)
                                                    <li>
                                                        <span class="icon color_yellow animate" data-anim-type="zoomInLeftLarge"><i class="{{ $tec->icono }}"></i></span>
                                                            <p>{{ $tec->titulo }}</p>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider">
                                            <hr class="no_line" style="margin: 0 auto 20px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
