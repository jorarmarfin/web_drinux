<div class="section_wrapper clearfix" style="min-height: 450px; width: 100%; margin-top: -1px; background: url({{ $nodo->imagen_secundaria }}); background-repeat: no-repeat; background-position: center center; background-size: cover;">
    <div class="items_group clearfix" style="max-width: 1200px; margin: 0 auto;">
        <!-- One full width row-->
        <div class="one-second column" style="box-sizing: border-box; float: unset; float: right; padding: 20px;">
            <div class="animate zoomIn" data-anim-type="zoomIn">
                <div style="color: #fff;">
                    <h2 style="color: #fff;">{{ $nodo->titulo_secundario }}</h2>
                    <p style="line-height: 2.5; text-align: justify; color: #fff;">{!! $nodo->body_secundario !!}</p>
                    <a class="button  button_size_3 button_yellow button_js" href="#" target="_blank" style="display: inline-block; vertical-align: middle;"><span class="button_label">Comienza tu Proyecto >></span></a> ó llámanos al <strong style="display: inline-block; vertical-align: middle;"><h4 style="color: #fff;"> (+01) 7327055</h4></strong>
                </div>
            </div>
        </div>
    </div>
</div>