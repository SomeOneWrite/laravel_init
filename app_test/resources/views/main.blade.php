<!DOCTYPE html>
<html>
<head>
    <title>Тестовый сайт для тыры пыры</title>
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css" media="all"/>
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href='//fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic'
          rel='stylesheet' type='text/css'>
    <!-- For-Mobile-Apps-and-Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords"
          content=" Book My Ticket Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //For-Mobile-Apps-and-Meta-Tags -->
</head>
<body>
<div class="content">
    <div class="colors">
        <a class="default" href="javascript:void(0)"></a>
        <a class="blue" href="javascript:void(0)"></a>
        <a class="green" href="javascript:void(0)"></a>
        <a class="red" href="javascript:void(0)"></a>
        <a class="white" href="javascript:void(0)"></a>
        <a class="black" href="javascript:void(0)"></a>
    </div>
    <div id="jquery-accordion-menu" class="jquery-accordion-menu">
        <div class="jquery-accordion-menu-header">Название какое?</div>
        <ul>
            {{--<li class="active"><a href="#"><i class="fa fa-home"></i>Главная</a></li>--}}
            <li><a href="/find_party"><i class="fa fa-glass"></i>Найти мероприятие</a><span class="jquery-accordion-menu-label">12</span></li>
            <li><a href="/create_party"><i class="fa fa-file-image-o"></i>Создать мероприятие</a></li>
            <li><a href="#"><i class="fa fa-cog"></i>Как пользоваться?</a>
                {{--<ul class="submenu">--}}
                    {{--<li><a href="#">--}}
                            {{--Web Design </a></li>--}}
                    {{--<li><a href="#">Hosting </a></li>--}}
                    {{--<li><a href="#">Design </a>--}}
                        {{--<ul class="submenu">--}}
                            {{--<li><a href="#">Graphics </a></li>--}}
                            {{--<li><a href="#">Vectors </a></li>--}}
                            {{--<li><a href="#">Photoshop </a></li>--}}
                            {{--<li><a href="#">Fonts </a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a href="#">Consulting </a></li>--}}
                {{--</ul>--}}
            </li>
            {{--<li><a href="#"><i class="fa fa-newspaper-o"></i>News </a></li>--}}
            {{--<li><a href="#"><i class="fa fa-suitcase"></i>Portfolio </a>--}}
                {{--<ul class="submenu">--}}
                    {{--<li><a href="#">Web Design </a></li>--}}
                    {{--<li><a href="#">Graphics </a><span class="jquery-accordion-menu-label">10 </span></li>--}}
                    {{--<li><a href="#">Photoshop </a></li>--}}
                    {{--<li><a href="#">Programming </a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            <li><a href="#"><i class="fa fa-envelope"></i>Контакты</a></li><li><a href="#"><i class="fa fa-user"></i>О нас</a></li>
        </ul>
        {{--<div class="jquery-accordion-menu-footer">Правила пользования</div>--}}
    </div>
</div>
<!----- tabs-box ---->

{{--<div class="container" style="  position: relative;--}}
  {{--height: 80vh;">--}}
    {{--<div class="jumbotron">--}}
        {{--<div class="tabs-box">--}}
            {{--<ul class="tabs-menu row" >--}}
                {{--<li class="col-2"><a onclick="find_town();" style="font-size: 0.6rem;" href="/find_party">Найти мероприятие</a></li>--}}
                {{--<li class="col-2"><a onclick="create_town();" style="font-size: 0.6rem;" href="/create_party">Создать мероприятие</a></li>--}}
                {{--<div class="clearfix"></div>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}

{{--</div>--}}
<!----- tabs-box ---->
<!----- Comman-js-files ----->
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/index.js') }}"></script>
<script>
    // $(document).ready(function () {
    //     $(".tabs-menu a").click(function (event) {
    //         event.preventDefault();
    //         var tab = $(this).attr("href");
    //         $(".tab-grid").not(tab).css("display", "none");
    //         $(tab).fadeIn("slow");
    //     });
    // });
</script>
<!----- Comman-js-files ----->
</body>
</html>