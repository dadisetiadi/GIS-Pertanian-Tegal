

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<?php
  $title="Edit Data"; 
  $url2='ubah_sayuran_margadana'; 
  $url='edit_datasayuran_margadana';

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
        $id_sayuran=  $_POST['id_sayuran'];
        $nama_sayuran = $_POST['nama_sayuran'];
        $luas_panen_sayuran = $_POST['luas_panen_sayuran'];
        $produksi_sayuran = $_POST['produksi_sayuran'];
                
        mysqli_query($connection,"UPDATE tb_sayuran_margadana set nama_sayuran='$nama_sayuran', luas_panen_sayuran='$luas_panen_sayuran', produksi_sayuran='$produksi_sayuran' where id_sayuran='$id_sayuran'");
    ?>
  
  <script type="text/javascript">
    window.alert("Sukses Diubah");
    window.location.href="<?=url('edit_datasayuran_margadana')?>";
  </script>

  <?php

}

if(isset($_GET['hapus'])){
      include 'koneksi.php';
      $id_sayuran = $_GET['id'];
      mysqli_query($connection,"DELETE from tb_sayuran_margadana where id_sayuran='$id_sayuran'");
}
if(isset($_GET['ubah']) AND isset($_GET['id'])) {
  $id=$_GET['id'];
  include "koneksi.php";
  $data = mysqli_query($connection,"SELECT * from tb_sayuran_margadana where id_sayuran='$id'");
  while($b = mysqli_fetch_array($data)){
    $id_sayuran=  $b['id_sayuran'];
    $nama_sayuran = $b['nama_sayuran'];
    $luas_panen_sayuran = $b['luas_panen_sayuran'];
    $produksi_sayuran = $b['produksi_sayuran'];
 

  }


?> <!-- Judul Halaman -->


  <div class="container">
    <form method="post" enctype="multipart/form-data">
      <?=input_hidden('id_sayuran',$id_sayuran)?>
    
      <div class="form-group">
        <label>Nama Kecamatan</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_text('nama_sayuran', $nama_sayuran)?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Luas Panen</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_text('luas_panen_sayuran', $luas_panen_sayuran)?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Produksi Sayuran</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_text('produksi_sayuran', $produksi_sayuran)?>
          </div>
        </div>
      </div>

     


      
      <div class="form-group">
        <button type="submit" name="simpan" class="btn btn-info" href="<?=url($url)?>"><i class="fa fa-save"></i> Simpan</button>
        <a href="<?=url('edit_sayuran_margadana')?>" class="btn btn-danger external"> Kembali</a>
      </div>

    </form>


 <?php } else {?>

    <div class="page_single layout_fullwidth_padding">          
            <div class="table-responsive">
                <table class="table">
     
                       <?php
                        include "koneksi.php";
                        $query = mysqli_query($connection,"SELECT * FROM tb_sayuran_margadana ORDER BY id_sayuran");
                        ?>
                    <thead>
                    <tr>
                      <th>Nama sayuran</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php if(mysqli_num_rows($query)>0){ ?>
                                <?php
                                   
                                    while($data = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    
                                    <td><?php echo str_replace('_', ' ',$data["nama_sayuran"]); ?></td>
                                  
                                    <td>
                                       
                                      <a href="<?=url($url.'&ubah&id='.$data['id_sayuran'])?>" class="external"><img src="<?=templates()?>images/icons/black/edit1.png"> Edit</a>

                                      <a href="<?=url($url.'&hapus&id='.$data['id_sayuran'])?>" class="external" onclick="return confirm('Hapus data?')"> <img src="<?=templates()?>images/icons/black/edit1.png"></a> </a>
                                    </td>
                                </tr>
                                <?php  } ?>
                                <?php } ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
      


 <?php } ?>
        <!-- footer ends-->

    </div>