@extends("layout.namapenerima")

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
    <div class="container">
                   {{ Form::model($pendaftaransbyid, array('route' => array('namacalon.update', $pendaftaransbyid->id))) }}
                                {{ Form::label('id', 'Id') }}
                                {{ Form::text('id', null, array('class' => 'form-control','placeholder'=>'Teks')) }}
                                {{ '<div>'.$errors->first('id').'</div>' }}
                                
                                {{ Form::label('nm_peserta', 'Nama Peserta') }}
                                {{ Form::text('nm_peserta', null, array('class' => 'form-control','placeholder'=>'Teks')) }}
                                {{ '<div>'.$errors->first('nm_peserta').'</div>' }}   
                                                             
                                {{ Form::label('j_kel', 'Jenis Kelamin') }}
                                {{ Form::text('j_kel', null, array('class' => 'form-control','placeholder'=>'Teks')) }}
                                {{ '<div>'.$errors->first('j_kel').'</div>' }}   
                                                             
                                {{ Form::label('agama', 'Agama') }}
                                {{ Form::text('agama', null, array('class' => 'form-control','placeholder'=>'Teks')) }}
                                {{ '<div>'.$errors->first('agama').'</div>' }}      
                                                          
                                {{ Form::label('alamat', 'Alamat') }}
                                {{ Form::text('alamat', null, array('class' => 'form-control','placeholder'=>'Teks')) }}
                                {{ '<div>'.$errors->first('alamat').'</div>' }}   
                                                             
                                {{ Form::label('nm_ortu', 'Nama Orang Tua') }}
                                {{ Form::text('nm_ortu', null, array('class' => 'form-control','placeholder'=>'Teks')) }}
                                {{ '<div>'.$errors->first('nm_ortu').'</div>' }}       
                                                         
                                {{ Form::label('no_telp', 'No Telepon') }}
                                {{ Form::text('no_tlp', null, array('class' => 'form-control','placeholder'=>'Teks')) }}
                                {{ '<div>'.$errors->first('no_tlp').'</div>' }}      
                                                          
                                {{ Form::label('nm_kk', 'Nomor Kartu Keluarga') }}
                                {{ Form::text('nm_kk', null, array('class' => 'form-control','placeholder'=>'Teks')) }}
                                {{ '<div>'.$errors->first('nm_kk').'</div>' }}
                                {{ Form::label('hub_kel', 'Hubungan Keluarga') }}
                                {{ Form::text('hub_kel', null, array('class' => 'form-control','placeholder'=>'Teks')) }}
                                {{ '<div>'.$errors->first('hub_kel').'</div>' }}
                                
                            {{ Form::submit('SIMPAN', array('class' => 'form-control')) }}
                        {{ Form::close() }}
            </div>
            @stop