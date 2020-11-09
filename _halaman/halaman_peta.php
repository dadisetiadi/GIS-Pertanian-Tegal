<?php
  $title="Halaman Peta "; 
?> <!-- Judul Halaman -->


<div class="pages">
  <div data-page="about" class="page no-toolbar no-navbar">
    <div class="page-content">
    
    <div class="navbarpages">
		<div class="navbar_left">
    <div class="logo_text"><a href="<?=url('beranda')?>" class="external"> <span>Web</span>GIS</a></div>
		</div>			
		<a href="#" data-panel="left" class="open-panel">
			<div class="navbar_right"><img src="<?=templates()?>images/icons/green/menu.png" alt="" title="" /></div>
		</a>					
	</div>
					
        
          <div id="pages_maincontent">
      
          <h2 class="page_title">Data Kecamatan</h2>
	        <div class="page_single layout_fullwidth_padding">	  
		  
             
                <blockquote>
                 Halaman ini memuat peta-peta wilayah daerah Kota Tegal.
               </blockquote>  

	  
			  		  
          <h3>Pilih Menu</h3> 		  
          <ul class="features_list">	
                    <li><a href="<?=url('peta_kotategal')?>" class="external"><img src="<?=templates()?>images/icons/black/peta1.png" alt="" title="" /><span>Peta Wilayah Kota Tegal</span></a></li>
                    <li><a href="<?=url('peta_ts')?>" class="external"><img src="<?=templates()?>images/icons/black/peta2.png" alt="" title="" /><span>Peta Kecamatan Tegal Selatan</span></a></li>
                    <li><a href="<?=url('peta_tegaltimur')?>" class="external"><img src="<?=templates()?>images/icons/black/peta3.png" alt="" title="" /><span>Peta Kecamatan Tegal Timur</span></a></li>
                    <li><a href="<?=url('peta_tb')?>" class="external"><img src="<?=templates()?>images/icons/black/peta4.png" alt="" title="" /><span>Peta Kecamatan Tegal Barat</span></a></li>
                    <li><a href="<?=url('peta_margadana')?>" class="external"><img src="<?=templates()?>images/icons/black/peta5.png" alt="" title="" /><span>Peta Kecamatan Margadana</span></a></li>
                
              </ul>		  
         </div>
      
      </div>
    </div>
  </div>
</div>
