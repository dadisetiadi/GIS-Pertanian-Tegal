

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<?php
  $title="Edit Data"; 
  $url3='tambah_buah_margadana'; 
  $url='edit_buah_margadana';

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
    
        $nama_buah = $_POST['nama_buah'];
        $jumlah_panen = $_POST['jumlah_panen'];
      
                
        mysqli_query($connection,"INSERT into tb_buah_margadana (nama_buah, jumlah_panen) values('$nama_buah','$jumlah_panen')");
    ?>
  
  <script type="text/javascript">
    window.alert("Sukses Ditambah");
    window.location.href="<?=url('edit_databuah_margadana')?>";
  </script>

  <?php

}



?> <!-- Judul Halaman -->


  <div class="container">
    <form method="post" enctype="multipart/form-data">
     
      <div class="form-group">
        <label>Nama Buah</label>
        <div class="row">
          <div class="col-md-6">
          <input required="" type="text" name="nama_buah" class="form-control" />
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Jumlah Panen </label>
        <div class="row">
          <div class="col-md-6">
          <input required="" type="number" name="jumlah_panen" class="form-control" />
          </div>
        </div>
      </div>

    

      
      <div class="form-group">
        <button type="submit" name="simpan" class="btn btn-info" href="<?=url($url)?>"><i class="fa fa-save"></i> Simpan</button>
        <a href="<?=url('edit_databuah_margadana')?>" class="btn btn-danger external"> Kembali</a>
      </div>

    </form>



</div>
