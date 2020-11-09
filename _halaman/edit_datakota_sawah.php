<?php
  $title="Edit Data Kota"; 
?> <!-- Judul Halaman -->


<div class="pages">
  <div data-page="about" class="page no-toolbar no-navbar">
    <div class="page-content">
    
    <div class="navbarpages">
		<div class="navbar_left">
    <div class="logo_text"><a href="<?=url('halaman_admin')?>" class="external"> <span>Web</span>GIS</a></div>
		</div>			
						
	</div>
					
        
          <div id="pages_maincontent">
      
          <h2 class="page_title">Data Kota Tegal</h2>
	        <div class="page_single layout_fullwidth_padding">	  
		  
             
                <blockquote>
                 Halaman ini memuat data-data luas panen & jumlah produksi padi kecamatan di Kota Tegal.
               </blockquote>  

	  
			  		  
          <h3>Pilih Menu</h3> 		  
              <ul class="features_list">	
		          <li><a href="<?=url('edit_datasawah_kotategal')?>" class="external"><img src="<?=templates()?>images/icons/black/blog.png" alt="" title="" /><span>Edit Luas Sawah Kota Tegal</span></a></li>  		
                  <li><a href="<?=url('edit_luaspanen_kotategal')?>" class="external"><img src="<?=templates()?>images/icons/black/contact.png" alt="" title="" /><span>Edit Luas Panen Padi Kota Tegal</span></a></li>
                  <li><a href="<?=url('edit_datasayuran_tegalselatan')?>" class="external"><img src="<?=templates()?>images/icons/black/tabs.png" alt="" title="" /><span>Edit Data Sayuran Kota Tegal</span></a></li>
                  <li><a href="<?=url('edit_databuah_tegalselatan')?>" class="external"><img src="<?=templates()?>images/icons/black/toggle.png" alt="" title="" /><span>Edit Data Buah Kota Tegal</span></a></li>	  
              </ul>
        
         </div>
      
      </div>
    </div>
  </div>
</div>