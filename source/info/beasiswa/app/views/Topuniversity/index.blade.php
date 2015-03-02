@extends("layout.info1")

@section("content")
 <div id="navigation_menu">
    	<a href="{{URL::to("Beranda")}}" id="navigation_menu_button"> Beranda </a>
        
        <a href="{{URL::to("Info")}}" id="navigation_menu_button_aktif"> Info Beasiswa </a>
        
        <a href="{{URL::to("KontakKami")}}" id="navigation_menu_button"> Kontak Kami </a>
        
    </div>
<div id="content_wrapper">


		<div id="content_leftcol"> 
        	<div id="content_leftcol_title"> Informasi Beasiswa </div>
            <a href="{{URL::to("Topuniversity")}}" id="content_leftcol_btn_aktif"> Top Universities  </a>
           
            <a href="{{URL::to("Beranda")}}" id="content_leftcol_btn"> Tentang Info</a>
            <a href="{{URL::to("BeasiswaS1")}}" id="content_leftcol_btn"> Beasiswa S1 </a>
            <a href="{{URL::to("BeasiswaS2")}}" id="content_leftcol_btn"> Beasiswa S2 </a>
        	<a href="{{URL::to("BeasiswaS3")}}" id="content_leftcol_btn">  Beasiswa S3 </a>
            <a href="{{URL::to("BeasiswaDalamNegeri")}}" id="content_leftcol_btn"> Beasiswa Dalam Negeri  </a>
             <a href="{{URL::to("BeasiswaLuarNegeri")}}" id="content_leftcol_btn"> Beasiswa Luar Negeri  </a>
            	 
         
    </div>
        </div>
        

@stop