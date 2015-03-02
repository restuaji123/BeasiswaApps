@extends('layout.namapenerima')
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
    </header><!--/header-->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Data Calon Penerima</small>
        </h1>
        @if (Session::has('message'))
            {{ Session::get('message') }}
        @endif
        <p><a href="{{URL::to("Pendaftaran")}}" class="btn btn-primary" role="button">Tambah Data Peserta Didik</a></p>
        <div class="table-responsive">
                           <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No Peserta</th>
                                        <th>Nama Peserta Didik</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Agama</th>
                                        
                                        <th>Nama Orang Tua</th>
                                       
                                        <th>No Telpon</th>
                                        <th>Nomor Kartu Keluarga</th>
                                        <th>Hubungan Keluarga</th>
                                        <th width="146">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pendaftaran as $value)
                                    <tr>
                                        <td>{{{ $value->id }}}</td>
                                        <td>{{{ $value->nm_peserta }}}</td>
                                        <td>{{{ $value->j_kel }}}</td>
                                        <td>{{{ $value->agama }}}</td>
                                        
                                        <td>{{{ $value->nm_ortu }}}</td>
                                        
                                        <td>{{{ $value->no_tlp }}}</td>
                                        <td>{{{ $value->nm_kk }}}</td>
                                        <td>{{{ $value->hub_kel }}}</td>
                                        <td>
                                            <div class="btn-group">
                       
                        <a href="{{URL::to("namacalon/edit/".$value->id) }}"> <button class="btn btn-primary">Ubah</button></a>
                        <a href="{{URL::to("namacalon/" .$value->id. "/destroy")}}"> <button class="btn btn-primary">Hapus</button></a>
                
                        </div>
                                        </td>
                                    </tr>
                                @endforeach   
                                </tbody>
                            </table>
            </div>
            
 
    </div>
</div>
@stop