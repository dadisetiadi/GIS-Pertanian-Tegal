<?php
  $title="Halaman Data Kota"; 
?> <!-- Judul Halaman -->


<div class="pages">
  <div data-page="about" class="page no-toolbar no-navbar">
    <div class="page-content">
    
    <div class="navbarpages">
		<div class="navbar_left">
    <div class="logo_text"><a href="<?=url('beranda')?>" class="external"> <span>Web</span>GIS</a></div>
		</div>			
						
	</div>
					
     <div id="pages_maincontent">
      
          <h2 class="page_title">Data Kota Tegal</h2>
		  
		  
	<div class="page_single layout_fullwidth_padding">	  
		  
              <blockquote>
                 Halaman ini memuat data-data per kecamatan di Kota Tegal, meliputi data luas sawah, data produksi padi, data produksi buah-buahan, dan data produksi tanaman.
               </blockquote>  

	
              <h3>Pilih Menu</h3>   
              <ul class="features_list_block">
                    <li><a href="<?=url('data_sawah')?>" class="external"><img src="<?=templates()?>images/icons/black/potong.png" alt="" title="" /><span>Data Luas Penggunaan Lahan Sawah</span></a></li>
                    <li><a href="<?=url('data_luaspanen')?>" class="external"><img src="<?=templates()?>images/icons/black/padi.png" alt="" title="" /><span>Data Luas Panen Rata-rata Produksi Padi</span></a></li>
                    <li><a href="<?=url('data_sayuran_tegalselatan')?>" class="external"><img src="<?=templates()?>images/icons/black/lettuce.png" alt="" title="" /><span>Data Luas Panen dan Produksi Tanaman Sayuran</span></a></li>
                    <li><a href="<?=url('data_buah_tegalselatan')?>" class="external"><img src="<?=templates()?>images/icons/black/avocado.png" alt="" title="" /><span>Data Jumlah Pohon Panen Buah-buahan</span></a></li>
            </ul>		  
        
        
            		  
         </div>
      
      </div>
      
      
    </div>
  </div>
</div>


