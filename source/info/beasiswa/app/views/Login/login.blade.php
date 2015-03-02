@extends('layout.login')

@section('content')
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
                    <li><a href="{{URL::to("Namacalon")}}" id>Data Pendaftar</a></li>
                           <li><a href="{{URL::to("BeasiswaS1")}}" id>Beasiswa S1</a></li>
                            <li><a href="{{URL::to("BeasiswaS2")}}" id>Beasiswa S2</a></li>
                            <li><a href="{{URL::to("BeasiswaS3")}}" id>Beasiswa S3</a></li>
                            <li><a href="{{URL::to("BeasiswaDalamNegeri")}}" id>Beasiswa Dalam Negeri</a></li>
                            <li><a href="{{URL::to("BeasiswaLuarNegeri")}}" id>Beasiswa Luar Negeri</a></li>
                            
                        </ul>
            </div>
        </div>
    </header><!--/header--><br /><br /><br /><br /><br /><br />
     <div class="container">
     <h1>Login</h1>
        <div align="center">
        <fieldset>
        <input type="email" name="email" placeholder="email" class="form-control"/><br />
        <input type="password" name="password" placeholder="password" class="form-control"/><br />
        <a href="{{URL::to("Beranda")}}"><button>Login</button></a>
        </fieldset>
        </div>
     </div>
@stop