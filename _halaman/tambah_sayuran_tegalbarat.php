

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<?php
  $title="Edit Data"; 
  $url3='tambah_sayuran_tegalbarat'; 
  $url='edit_datasayuran_tegalbarat';

  ?>



  <div data-page="about" class="page no-toolbar no-navbar">
    <div class="page-content">
    
    <div class="navbarpages">
		<div class="navbar_left">
    <div class="logo_text"><a href="<?=url('halaman_admin')?>" class="external"> <span>Web</span>GIS</a></div>
		</div>			
						
	</div>
					
        
          <div id="pages_maincontent">
      
          
	        <div class="page_single layout_fullwidth_padding">	
          <br> </br>  
		
    <?php
        if(isset($_POST['simpan'])){
        include 'koneksi.php';
    
        $nama_sayuran = $_POST['nama_sayuran'];
        $luas_panen_sayuran = $_POST['luas_panen_sayuran'];
        $produksi_sayuran = $_POST['produksi_sayuran'];
                
        mysqli_query($connection,"INSERT into tb_sayuran_tegalbarat (nama_sayuran, luas_panen_sayuran, produksi_sayuran) values('$nama_sayuran','$luas_panen_sayuran','$produksi_sayuran')");
    ?>
  
  <script type="text/javascript">
    window.alert("Sukses Ditambah");
    window.location.href="<?=url('edit_datasayuran_tegalbarat')?>";
  </script>

  <?php

}



?> <!-- Judul Halaman -->


  <div class="container">
    <form method="post" enctype="multipart/form-data">
     
      <div class="form-group">
        <label>Nama Sayuran</label>
        <div class="row">
          <div class="col-md-6">
          <input required="" type="text" name="nama_sayuran" class="form-control" />
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Luas Panen</label>
        <div class="row">
          <div class="col-md-6">
          <input required="" type="number" name="luas_panen_sayuran" class="form-control" />
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Produksi Sayuran</label>
        <div class="row">
          <div class="col-md-6">
          <input required="" type="number" name="produksi_sayuran" class="form-control" />
          </div>
        </div>
      </div>

     


      
      <div class="form-group">
        <button type="submit" name="simpan" class="btn btn-info" href="<?=url($url)?>"><i class="fa fa-save"></i> Simpan</button>
        <a href="<?=url('edit_sayuran_tegalbarat')?>" class="btn btn-danger external"> Kembali</a>
      </div>

    </form>



</div>
