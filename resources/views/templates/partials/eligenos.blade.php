{{-- <div class="section flv_sections_1" id="ecommerce_ready">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One full width row-->
            <div class="column one column_fancy_heading">
                <div class="fancy_heading fancy_heading_icon">
                    <!-- Animated area -->
                    <div class="animate" data-anim-type="zoomInLeftLarge">
                        <h2 class="title">Porque elegirnos</h2>
                        <div class="inside">
                            <span class="big">Puede Confiar en DRINUX</span>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($eligenos as $item)
                <!-- One Third (1/4) Column -->
                <div class="column one-fourth column_list">
                    <div class="list_item lists_3 clearfix">
                        <!-- Animated area -->
                        <div class="animate" data-anim-type="fadeInRight">
                            <div class="list_left list_icon text-align-center">
                                <i class="icon-picture"></i>
                            </div>
                            <div class="list_right text-align-center">
                                <h4>{{ $item->titulo }}</h4>
                                <div class="desc">
                                    {!! $item->body !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div> --}}
<div class="section flv_sections_1" id="ecommerce_ready">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- Page Title-->
            <!-- One full width row-->
            <div class="column one column_fancy_heading">
                <div class="fancy_heading fancy_heading_icon">
                    <!-- Animated area -->
                    <div class="animate" data-anim-type="zoomInLeftLarge">
                        <h2 class="title">{{ $porque->titulo }}</h2>
                        <div class="inside">
                            <span class="big">{!! $porque->body !!}</span>
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
                            <i class="{{ $eligenos[0]->icono }}"></i>
                        </div>
                        <div class="list_right">
                            <h4>{{ $eligenos[0]->titulo }}</h4>
                            <div class="desc">
                                {!! $eligenos[0]->body !!}
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
                            <i class="{{ $eligenos[1]->icono }}"></i>
                        </div>
                        <div class="list_right">
                            <h4>{{ $eligenos[1]->titulo }}</h4>
                            <div class="desc">
                                {!! $eligenos[1]->body !!}
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
                            <h4>{{ $eligenos[2]->titulo }}</h4>
                            <div class="desc">
                                {!! $eligenos[2]->body !!}
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
                            <h4>{{ $eligenos[3]->titulo }}</h4>
                            <div class="desc">
                                {!! $eligenos[3]->body !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
