<?php
  $title="Beranda"; 

  session_start();

?> <!-- Judul Halaman -->

  
<div class="views">

<div class="view view-main">



  <div class="pages">

    <div data-page="index" class="page homepage">
      <div class="page-content homepagecontent">	

    <div class="homenavbar">
    <h1><span>WEBGIS</span> Tegal</h1>	
                  </div>
                  
            <!-- Slider -->
           <div class="swiper-container swiper-init" data-effect="slide" data-parallax="true" data-pagination=".swiper-pagination" data-paginationClickable="true">
              <div class="swiper-wrapper">
              
                <div class="swiper-slide">
       <img src="<?=templates()?>images/slider/tegl.png" alt="" title="" />
          <div class="slider-caption">
          <h2 data-swiper-parallax="-100%">WEBGIS Pertanian</h2>
          
          <span class="subtitle" data-swiper-parallax="-60%">Kota Tegal</span>
          <p data-swiper-parallax="-30%">Webgis merupakan aplikasi GIS Pertanian Kota Tegal. Berisi tentang data yang berhubungan dengan pertanian di Kota Tegal.  </p>
          </div>
                 </div>
                <div class="swiper-slide">		  
      <img src="<?=templates()?>images/slider/Capture.jpg" alt="" title="" />
                </div>
               
              </div>
            </div>	
    <div class="swiper-pagination"></div>						  
      
      <nav class="main-nav">
      <ul>
          <li><a href="<?=url('beranda')?>"class="external"><img src="<?=templates()?>images/icons/black/home.png" alt="" title="" /><span>Home</span></a></li>
          <li><a href="<?=url('data_kota')?>" class="external"><img src="<?=templates()?>images/icons/black/tables.png" alt="" title="" /><span>Data Kota</span></a></li>
          <li><a href="<?=url('data_kecamatan')?>" class="external"><img src="<?=templates()?>images/icons/black/form.png" alt="" title="" /><span>Data Kecamatan</span></a></li>
          <li><a href="<?=url('halaman_peta')?>" class="external"><img src="<?=templates()?>images/icons/black/map.png" alt="" title="" /><span>Halaman Peta</span></a></li> 
         
          <li><a href="<?=url('login')?>" class="external"><img src="<?=templates()?>images/icons/black/lock.png" alt="" title="" /><span>LOGIN</span></a></li>
                 
      
       </ul>
      </nav>	

      </div>
    </div>
  </div>

</div>
</div>


 <!-- Login Popup -->
 