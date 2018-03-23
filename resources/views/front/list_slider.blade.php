@include('front.header')



<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php $classActive = "active"; ?>
        @foreach ($sliders as $clave=>$valor)

            <div class="item {{ $classActive }}">
                <img style="height:360px;width:100%;" src="{!! asset('images/sliders/'.$valor->dc_slider) !!}" alt="{{$valor->link_slider}}" style="width:100%;">
                <div class="carousel-caption">
                    <h2 style="background:#000;color:#FFF;">{{$valor->texto_slider}}</h2>
                </div>
            </div>
            <?php $classActive = ""; ?>
        @endforeach


    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>


@foreach ($sliders as $clave=>$valor)


@endforeach







@include('front.footer')

