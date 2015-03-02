@extends("layout.home")

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
                    <h1>Registration</h1>
                    <p></p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="{{URL::to("Namacalon")}}" id>Pages</a></li>
                        <li class="active">Registration</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->     

    <section id="registration" class="container">
    
        <form method="post" class="center" role="form">
            <fieldset class="registration-form">
                <div class="form-group">
                <form action="{{ URL::to('pendaftarans/post') }}" method="post">
                  <label>No Peserta</label>
                    <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="No Peserta"  name="no_peserta"/>
                            {{ $errors->first('no_peserta') }}
                </div>
                <div class="form-group">
                    <label>Nama Peserta</label>
                        <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="Nama Peserta" name="nm_peserta"/>
                            {{ $errors->first('nm_peserta') }}
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                        <div class="input-control text" data-role="input-control"> 
                             <select name="j_kel">
                                <option>Laki - Laki</option>
                                <option>Perempuan</option>
                            </select>
                            {{ $errors->first('j_kel') }}
                </div>
                <div class="form-group">
                    <label>Agama</label>
                        <div class="input-control text" data-role="input-control">
                             <select name="agama">
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Protestan</option>
                                <option>Hindu</option>
                                <option>Buddha</option>
                            </select>
                            {{ $errors->first('agama') }}
                </div>
                 <div class="form-group">
                    <label>Alamat</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Alamat" name="alamat"/>
                            {{ $errors->first('alamat') }}
                </div>
                 <div class="form-group">
                    <label>Nama Orang Tua</label>
                        <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="Nama Orang Tua" name="nm_ortu"/>
                            {{ $errors->first('nm_ortu') }}
                </div>
                <div class="form-group">
                    <label>No Telpon</label>
                        <div class="input-control text" data-role="input-control">
                              <input type="text" placeholder="No Telpon" name="no_tlp"/>
                              {{ $errors->first('no_telp') }}
                </div>
                 <div class="form-group">
                   <label>No Kartu Keluarga</label>
                        <div class="input-control text" data-role="input-control">
                              <input type="text" placeholder="No Kartu Keluarga" name="nm_kk"/>
                              {{ $errors->first('nm_kk') }}
                </div>
                <div class="form-group">
                   <label>Hubungan Keluarga</label>
                        <div class="input-control text" data-role="input-control">
                              <input type="text" placeholder="Hubungan Keluarga" name="hub_kel"/>
                              {{ $errors->first('hub_kel') }}
                </div>
                <div class="form-group">
                    <a href="{{ URL::to("pendaftaran/post")}}"><button class="btn btn-success btn-md btn-block">Tambah</button>
                </div>
            </fieldset>
        </form>
    </section><!--/#registration-->

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
@stop
