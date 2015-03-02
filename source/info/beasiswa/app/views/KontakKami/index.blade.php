@extends("layout.info1")

@section("content")
     <div id="navigation_menu">
    	<a href="{{URL::to("Beranda")}}" id="navigation_menu_button"> Beranda </a>
        
        <a href="{{URL::to("Info")}}" id="navigation_menu_button"> Info Beasiswa </a>
        
        <a href="{{URL::to("KontakKami")}}" id="navigation_menu_button_aktif"> Kontak Kami </a>
        
    </div>
    
     <!--CONTENT-->
    <div id="content_wrapper">


		
        
        
      <div id="content_rightcol_contact"> 
        
           <div id="content_rightcol_description_contact">

            <u> Contact Person Programming : </u>
            <br />
            <br />
            
            	Restu Aji Pamungkas <br />
            Phone : +62 899 8499 354 <br />
            <br />
             
            
           
    
           </div>
            
      </div>

     

       
    </div>
    <!--CONTENT-->
@stop