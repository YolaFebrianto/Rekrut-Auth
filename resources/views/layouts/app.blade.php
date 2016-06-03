<!DOCTYPE html>
<html>
<head>
    <title>Dhezign web recruitment</title>
    <link rel="shortcut icon" href="pic/dhzignlogo.jpg">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">

    <!-- Include this after the sweet alert js file -->


</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background: #31343C;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img style="float: left;" src="http://www.dhezign.com/wp-content/themes/DheZign/assets/images/logo.png">
                <a style="color:#fff;" class="navbar-brand" href="#">DheZign Recruitment</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <span class="log-out">
                        @if(Auth::check())
                        <a style="line-height: 10px; color: #fff;" class="glyphicon glyphicon-log-out" href="{{ url('/logout') }}"> Admin Logout</a>
                        @endif
                    </span>
                </ul>
            </div>
      </div>
    </nav>
    <!-- Carousel -->
    <section>
        @if (Session::has('sweet_alert.alert'))
            <script>
                swal({!! Session::get('sweet_alert.alert') !!});
            </script>
        @endif
        @include('sweet::alert')
        @yield('content')
    </section>
    <!-- Footer -->
    <div class="footer @yield('footer')">
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <address>
                        <strong>OFFICE</strong><br>
                        Perumahan Villa Nusa Indah 3 Blok KG 6/1<br>
                        Bojong Kulur, Gunung Putri<br>
                        Bogor, Jawa Barat<br>
                        <abbr title="ZipCode">Zip Code:</abbr> 16969<br>
                    </address>
                </div>
                <div class="col-md-4">
                    <address>
                        <strong>WORKSHOP</strong><br>
                        Gedung Creative Digital Hub (GERDHU) Jalan Manyar Tirtomoyo II No 22<br>
                        Surabaya, Indonesia<br>
                        <abbr title="ZipCode">Zip Code:</abbr> 60116 <br>
                        <br>
                        <strong>CONTACT</strong><br>
                        <abbr title="Phone">Phone:</abbr> +6282-25741-5478<br>
                        <abbr title="Email">Email:</abbr> support@dhezign.com<br>
                    </address>
                </div>
                <div class="col-md-4">
                    <address>
                        ©2015 <span style="color:#0D47A1;"><a href="#">Dhezign.com</a></span> | <span style="color:#0D47A1;"><a href="#">Sitemap</a></span><br>
                        <br>
                        <a href="#"><img src="https://www.vitalvar.hu/images/stories/logo-facebook.png"></a>
                        <a href="#"><img src="http://www.newztrack.com/english/wp-content/uploads/2016/01/twitter-icon.png"></a>
                        <a href="#"><img src="https://lh3.googleusercontent.com/N-AY2XwXafWq4TQWfua6VyjPVQvTGRdz9CKOHaBl2nu2GVg7zxS886X5giZ9yY2qIjPh=w300"></a>
                    </address>
                </div>
            </div>
        </div>
    </footer>
    </div>
</body>
</html>