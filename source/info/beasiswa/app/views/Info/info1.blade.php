@extends("layout.info1")

@section("content")
     <div id="navigation_menu">
    	<a href="{{URL::to("Beranda")}}" id="navigation_menu_button"> Beranda </a>
        
        <a href="{{URL::to("Info")}}" id="navigation_menu_button_aktif"> Info Beasiswa </a>
        
        <a href="{{URL::to("KontakKami")}}" id="navigation_menu_button"> Kontak Kami </a>
        
    </div>
        
 
    <!--CONTENT-->
    <div id="content_wrapper">


		<div id="content_leftcol"> 
        	<div id="content_leftcol_title"> Informasi Beasiswa </div>
            <a href="{{URL::to("Topuniversity")}}" id="content_leftcol_btn"> Top Universities  </a>
           
            <a href="{{URL::to("Info")}}"" id="content_leftcol_btn_aktif"> Tentang Info</a>
            <a href="{{URL::to("BeasiswaS1")}}" id="content_leftcol_btn"> Beasiswa S1 </a>
            <a href="{{URL::to("BeasiswaS2")}}"" id="content_leftcol_btn"> Beasiswa S2 </a>
        	<a href="{{URL::to("BeasiswaS3")}}"" id="content_leftcol_btn">  Beasiswa S3 </a>
            <a href="{{URL::to("BeasiswaDalamNegeri")}}" id="content_leftcol_btn"> Beasiswa Dalam Negeri  </a>
             <a href="{{URL::to("BeasiswaLuarNegeri")}}" id="content_leftcol_btn"> Beasiswa Luar Negeri  </a>
            
            
          
            
        </div>
        
        
      <div id="content_rightcol"> 
        

            <div id="content_rightcol_title">
            	Informasi Beasiswa
            </div>
            
            <div id="content_rightcol_description">
            <img src="../../images/gambar_utama/beasiswa1.png" alt="" width="600" height="300" />
            
            </div>
            
            <div id="content_rightcol_description">
            
            
<p><b>1. INFO BEASISWA – Pendidikan merupakan salah satu bentuk investasi masa depan paling menjanjikan. Melalui pendidikan seseorang bisa mewujudkan apa yang diimpikannya dengan ilmu pengetahuan. Secara formal jenjang pendidikan di Indonesia dan negara lainnya dimulai dari tingkat dasar, menengah, hingga perguruan tinggi. Sebagai sebuah investasi penting maka wajar saja jika menempuh pendidikan akan membutuhkan dana yang tidak sedikit. Untuk itu, pemerintah dan lembaga-lembaga pendidikan menawarkan berbagai program beasiswa seperti beasiswa prestasi, beasiswa penelitian, beasiswa olahraga, bantuan buku-buku, SPP gratis, maupun beasiswa yang dikhususkan bagi siswa tidak mampu secara ekonomi.

Beasiswa adalah bantuan keuangan berupa keringanan biaya pendidikan maupun pemberian langsung dana pendidikan kepada perseorangan yang sedang menempuh pendidikan. Pemberian beasiswa ini bertujuan untuk meringankan beban keuangan siswa agar yang bersangkutan bisa lebih fokus pada pendidikan dan penelitian yang sedang dijalaninya. Beasiswa biasanya diberikan oleh institusi pendidikan tempat siswa menuntut ilmu dan juga dari pemerintah, perusahaan, lembaga sosial, yayasan maupun perseorangan (donatur). Pada umumnya beasiswa diberikan secara cuma-cuma, namun ada juga beberapa lembaga ataupun swasta yang mensyaratkan ikatan dinas kepada penerima beasiswa selama jangka waktu tertentu setelah yang bersangkutan menyelesaikan pendidikannya.

Infobeasiswa.net mengumpulkan informasi beasiswa terbaru dari berbagai sumber yang terdiri dari beasiswa d3, s1, s2, s3, beasiswa dalam negeri dan beasiswa dari luar negeri. Untuk mendapatkan info terkini via email seputar beasiswa silakan bergabung dalam Newsletter Beasiswa disini. Anda akan mendapatkan info terbaru beasiswa, cara mendapatkannya, dan tanggal batas akhir pengajuan beasiswa.</b></p>
              <p>
              </p>
            


        	<div id="content_rightcol_pagenumber">
            	
            	<a href="ourproduct1_page3.html" id="content_rightcol_pagenumber_btn">3</a>
                <a href="ourproduct1_page2.html" id="content_rightcol_pagenumber_btn">2</a>
                <a href="ourproduct1_page1.html" id="content_rightcol_pagenumber_btn_aktif">1</a>
            </div>
            
        </div>

       

       
    </div>
    <!--CONTENT-->
@stop