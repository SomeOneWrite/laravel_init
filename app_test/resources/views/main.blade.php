<!DOCTYPE html>
<html>
<head>
    <title>Book My Ticket a Mobile App Flat Bootstrap Responsive Website Template | Main :: W3layouts</title>
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
<body class="inner">
<!----- tabs-box ---->

<div class="container" style="  position: relative;
  height: 80vh;">
    <div class="jumbotron">
        <div class="tabs-box">
            <ul class="tabs-menu row" >
                <li class="col-2"><a onclick="find_town();" style="font-size: 0.6rem;" href="/find_party">Найти мероприятие</a></li>
                <li class="col-2"><a onclick="create_town();" style="font-size: 0.6rem;" href="/create_party">Создать мероприятие</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
    </div>

</div>
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