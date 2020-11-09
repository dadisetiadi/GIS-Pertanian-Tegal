<?php
  $title="Halaman Admin"; 

  session_start();
    if (!isset($_SESSION['username'])){
        header("Location:?halaman=beranda");
    }

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
      
          <h2 class="page_title"></h2>
	        <div class="page_single layout_fullwidth_padding">	  
		  
             
                <blockquote>
                 Halaman Admin
               </blockquote>  

	  
			  		  
          <h3>Pilih Menu</h3> 		  
            <ul class="features_list">	
              <li><a href="<?=url('edit_datakota_sawah')?>" class="external"><img src="<?=templates()?>images/icons/black/edit1.png" alt="" title="" /><span>Edit Data Kota</span></a></li>
              <li><a href="<?=url('edit_datakc_sawah')?>" class="external"><img src="<?=templates()?>images/icons/black/edit2.png" alt="" title="" /><span>Edit Data Kecamatan</span></a></li>
              <li><a onclick="return confirm('Apakah anda yakin akan logout?')" href="<?=url('logout')?>" class="external"><img src="<?=templates()?>images/icons/black/signout.png" alt="" title="" /><span>Logout</span></a></li>
            </ul>
        
         </div>
      
      </div>
    </div>
  </div>
</div>