<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Aegis Kuis</title>
    {{HTML::style('css/bootstrap.min.css');}}
    {{HTML::style('css/font-awesome.min.css');}}
    {{HTML::style('css/slider.css');}}
    {{HTML::style('css/carousel.css');}}
    <!--[if lt IE 9]>
    {HTML::script('js/html5shiv.js');}}
    {{HTML::script('js/respond.min.js');}}
    <![endif]-->
</head>
<!--/head-->
<body>
<div class="navbar-wrapper">
    <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Kuis Online</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="" style="margin-right: 30px"><a href="{{URL::route('login')}}">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img
                data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA4QAAAH0CAYAAABl8+PTAAAgAElEQ…AgQIAAAQIECBAgUExAICzWUOUQIECAAAECBAgQIEAgFfgfXPok+ZJT958AAAAASUVORK5CYII=">

            <div class="container">
                <div class="carousel-caption">
                    <img src="{{asset('img/addsoal.png')}}" alt="" width="575">
                    <h4>Menambahkan Soal</h4>
                    <h6>mudah dan cepat, dilengkapi dengan WYSIWG Editor</h6>
                    <a class="btn btn-primary" href="{{URL::route('register')}}">Daftar Sekarang</a>
                </div>
            </div>
        </div>
        <div class="item">
            <img
                data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA4QAAAH0CAYAAABl8+PTAAAgAElEQ…AgQIAAAQIECBAgUExAICzWUOUQIECAAAECBAgQIEAgFfgfXPok+ZJT958AAAAASUVORK5CYII=">

            <div class="container">
                <div class="carousel-caption">
                    <img src="{{asset('img/listsoal.png')}}" alt="" width="575">
                    <h4>Kelola Soal</h4>
                    <h6>pengelolaan bank soal dengan fleksibel</h6>
                    <a class="btn btn-primary" href="{{URL::route('register')}}">Daftar Sekarang</a>
                </div>
            </div>
        </div>
        <div class="item">
            <img
                data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA4QAAAH0CAYAAABl8+PTAAAgAElEQ…AgQIAAAQIECBAgUExAICzWUOUQIECAAAECBAgQIEAgFfgfXPok+ZJT958AAAAASUVORK5CYII=">

            <div class="container">
                <div class="carousel-caption">
                    <img src="{{asset('img/showkuis.png')}}" alt="" width="575">
                    <h4>Kelola Kuis</h4>
                    <h6>pembuatan kuis dan pengelolaan soal dalam kuis yang mudah</h6>
                    <a class="btn btn-primary" href="{{URL::route('register')}}">Daftar Sekarang</a>
                </div>
            </div>
        </div>
        <div class="item">
            <img
                data-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA4QAAAH0CAYAAABl8+PTAAAgAElEQ…AgQIAAAQIECBAgUExAICzWUOUQIECAAAECBAgQIEAgFfgfXPok+ZJT958AAAAASUVORK5CYII=">

            <div class="container">
                <div class="carousel-caption">
                    <img src="{{asset('img/showsoal.png')}}" alt="" width="575">
                    <h4>Detail Soal</h4>
                    <h6>detail soal yang transparan dan mudah dimengerti, beserta jawabannya</h6>
                    <a class="btn btn-primary" href="{{URL::route('register')}}">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span
            class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span
            class="glyphicon glyphicon-chevron-right"></span></a>
</div>
<!-- /.carousel -->

</div><!-- /.container -->
{{HTML::script('js/jquery-1.10.2.min.js');}}
{{HTML::script('js/bootstrap.min.js');}}
</body>
</html>