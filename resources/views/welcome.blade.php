@extends('layouts.app')

@section('content')
<section>
        <div style="margin-top: -49px; height: 400px;">
            <img src="pic/Carouselbg.jpg" style="width:100%;height:400px;position:absolute;">
            <div id="Slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="pic/Webdesignanddevelopment.png" alt="Web Design Development" class="img-carousel">
                    <div class="right">
                    <div class="carousel-caption">
                      <h3>Web Design & Development</h3>
                      <p>We are Dhezign Online Solution is committed to meet your needs as well as web design services and website development. We build interactive websites, ranging from simple text pages to a web-based application or service is the most complex social networks.</p>
                    </div>
                    </div>
                  </div>

                  <div class="item">
                    <img src="pic/Appdevelopment.png" alt="app development" class="img-carousel">
                    <div class="carousel-caption">
                        <h3>Application Development</h3>
                        <p>With an experienced apps developer, we will develop an application that you need to achieve your business goals. Our services include web development and mobile application.</p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="pic/seo.png" alt="seo" class="img-carousel">
                    <div class="carousel-caption">
                        <h3>Search Engine Optimization</h3>
                        <p>With Search Engine Optimization (SEO) then your website can rank top search engines Google, Bing, Yahoo!, and others to target specific keywords within their business so that your website is easily found in Serach Engine Result Page (SERP) search engine.</p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="pic/Appdevelopment.png" alt="app development" class="img-carousel">
                    <div class="carousel-caption">
                        <h3>All Services</h3>
                        <p>We still have other service solutions to meet your needs around the web and mobile application development. See all of our services here.</p>
                    </div>
                  </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#Slider" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#Slider" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div style="z-index: 1000;margin-top: 40px;">
            <a href="../vendor/welcome.blade.php#myModal" data-toggle="modal" data-target="#myModal" class="modal-up" style="text-decoration: none;">Kirim Lamaran</a>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="text-center">Kirim Lamaran</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" class="form-horizontal" role="form" action="" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="control-label col-sm-2">Nama</label>
                                <div class="col-sm-10">
                                    <input name="nama" type="text" class="form-control" id="nama" placeholder="Minimal 3 karakter">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">E-mail</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email yang valid">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">File CV</label>
                                <div class="col-sm-10">
                                      <input type="file" name="file" id="file">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-10">
                                    <button style="background-color: #5bc0de;color: white;" type="submit" id="kirim" class="btn"><span class="glyphicon glyphienvelope"> Kirim</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Division -->
        <div class="container-fluid">
            <div class="row" style="margin-top: 25px;">
                <!-- Android -->
                <div class="col-lg-6" style="height: 300px; background:#FFF;">
                    <img style="height: 350px; width:auto; margin: -25px 0px 0px -150px;" src="pic/android.png">
                    <div class="app-caption" style="padding-top:20px;">
                        <h2> Mobile App </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p  class="collapse" id="app-detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <button style="left:100px;" type="button" class="btn btn-success" data-toggle="collapse" data-target="#app-detail">
                            <span class="glyphicon glyphicon-chevron-down"></span> Open
                        </button>
                    </div>
                </div>
                <!-- Web -->
                <div class="col-lg-6" style=" height: 300px; background:#FFF;">
                    <img style="height: 270px; width:auto; margin: 25px 0px 0px -35px;" src="pic/web.png">
                    <div class="web-caption" style="padding-top:20px;">
                        <h2> Web development </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.et dolore magna aliqua exercitation ullamco</p>
                        <p  class="collapse" id="web-detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi.</p>
                        <button style="left:100px;" type="button" class="btn btn-success" data-toggle="collapse" data-target="#web-detail">
                            <span class="glyphicon glyphicon-chevron-down"></span> Open
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services -->
        <div class="container" style="margin-top: 45px;">
            <h4 style="font-family: Josefin Slab; color:#4F4F4F; font-size: 32px; font-weight:bold; margin:0px 0px -35px 485px;">
                Our Services</h4>
            <div class="row" style="margin-top: 65px; background: #31343C;">
                <!-- Web development -->
                <div class="col-lg-4" style=" height: 325px;">
                    <a href="#"><img style="height:220px; margin: 55px 0px 0px 15px; width:auto;"  class="img1" src="pic/webdevelopment.jpg"></a>
                </div>
                <!-- SEO -->
                <div class="col-lg-4" style=" height: 325px;">
                    <a href="#"><img style="height:220px; margin: 55px 0px 0px 15px; width:auto;"   class="img1" src="pic/SEO.jpg"></a>
                </div>
                <!-- Application development -->
                <div class="col-lg-4" style=" height: 325px;">
                    <a href="#"><img style="height:220px; margin: 55px 0px 0px 15px; width:auto;"   class="img1" src="pic/Appsdevelopment.jpg"></a>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        (function () {
            'use strict';
            function remoteModal(myModal){
                var vm = this;
                vm.modal = $(myModal);

                if (vm.modal.length == 0) {
                    return false;
                }

                if (window.location.hash == myModal) {
                    openModal();
                }

                var services = {
                    open : openModal;
                    close : closeModal;
                };

                return services;

                function openModal(){
                    vm.modal.modal('show');
                }

                function closeModal(){
                    vm.modal.modal('hide');
                }
            }
            window.prototype.remoteModal = remoteModal;
        })();

        $(function(){
            window.remoteModal('#myModal');
        });
    </script>
@endsection
