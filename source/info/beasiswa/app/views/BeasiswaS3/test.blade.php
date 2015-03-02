@extends("layout.beasiswas3")

@section("content")
<header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{{URL::to("Beranda")}}" id>Beranda</a></li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="{{URL::to("Pendaftaran")}}" id>Pendaftaran</a></li>
                           <li><a href="{{URL::to("BeasiswaS1")}}" id>Beasiswa S1</a></li>
                            <li><a href="{{URL::to("BeasiswaS2")}}" id>Beasiswa S2</a></li>
                            <li><a href="{{URL::to("BeasiswaS3")}}" id>Beasiswa S3</a></li>
                            <li><a href="{{URL::to("BeasiswaDalamNegeri")}}" id>Beasiswa Dalam Negeri</a></li>
                            <li><a href="{{URL::to("BeasiswaLuarNegeri")}}" id>Beasiswa Luar Negeri</a></li>
                            
                        </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Privacy Policy</h1>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Privacy Policy</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title--> 

    <section id="privacy-policy" class="container">
        <h3>Introduction</h3>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

        <p>&nbsp;</p>

        <h3>Types of information we collect</h3>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>

        <p>&nbsp;</p>

        <h3>Use of Information</h3>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

        <p>&nbsp;</p>
        <h3>Children</h3>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

        <p>&nbsp;</p>
        <h3>Contact information</h3>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
        <p>&nbsp;</p>
    </section><!--/#privacy-policy-->

    <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>About Us</h4>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                    <p>Pellentesque habitant morbi tristique senectus.</p>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Company</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="#">The Company</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">Our Partners</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Conatct Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Latest Blog</h4>
                    <div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="images/blog/thumb1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                                <small class="muted">Posted 17 Aug 2013</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="images/blog/thumb2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                                <small class="muted">Posted 13 Sep 2013</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="images/blog/thumb3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                                <small class="muted">Posted 11 Jul 2013</small>
                            </div>
                        </div>
                    </div>  
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Address</h4>
                    <address>
                        <strong>Twitter, Inc.</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                    <h4>Newsletter</h4>
                    <form role="form">
                        <div class="input-group">
                            <input type="text" class="form-control" autocomplete="off" placeholder="Enter your email">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button">Go!</button>
                            </span>
                        </div>
                    </form>
                </div> <!--/.col-md-3-->
            </div>
        </div>
@stop