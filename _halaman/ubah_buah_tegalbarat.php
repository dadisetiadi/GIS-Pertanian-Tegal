

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<?php
  $title="Edit Data"; 
  $url2='ubah_buah_tegalbarat'; 
  $url='edit_databuah_tegalbarat';

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
        $id_buah=  $_POST['id_buah'];
        $nama_buah = $_POST['nama_buah'];
        $jumlah_panen = $_POST['jumlah_panen'];

                
        mysqli_query($connection,"UPDATE tb_buah_tb set nama_buah='$nama_buah', jumlah_panen='$jumlah_panen' where id_buah='$id_buah'");
    ?>
  
  <script type="text/javascript">
    window.alert("Sukses Diubah");
    window.location.href="<?=url('edit_databuah_tegalbarat')?>";
  </script>

  <?php

}

if(isset($_GET['hapus'])){
      include 'koneksi.php';
      $id_buah = $_GET['id'];
      mysqli_query($connection,"DELETE from tb_buah_tb where id_buah='$id_buah'");
}
if(isset($_GET['ubah']) AND isset($_GET['id'])) {
  $id=$_GET['id'];
  include "koneksi.php";
  $data = mysqli_query($connection,"SELECT * from tb_buah_tb where id_buah='$id'");
  while($b = mysqli_fetch_array($data)){
    $id_buah=  $b['id_buah'];
        $nama_buah = $b['nama_buah'];
        $jumlah_panen = $b['jumlah_panen'];


  }


?> <!-- Judul Halaman -->


  <div class="container">
    <form method="post" enctype="multipart/form-data">
      <?=input_hidden('id_buah',$id_buah)?>
    
      <div class="form-group">
        <label>Nama Buah</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_text('nama_buah', $nama_buah)?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Jumlah Panen</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_text('jumlah_panen', $jumlah_panen)?>
          </div>
        </div>
      </div>

   

     


      
      <div class="form-group">
        <button type="submit" name="simpan" class="btn btn-info" href="<?=url($url)?>"><i class="fa fa-save"></i> Simpan</button>
        <a href="<?=url('edit_databuah_tegalbarat')?>" class="btn btn-danger external"> Kembali</a>
      </div>

    </form>


 <?php } else {?>

    <div class="page_single layout_fullwidth_padding">          
            <div class="table-responsive">
                <table class="table">
     
                       <?php
                        include "koneksi.php";
                        $query = mysqli_query($connection,"SELECT * FROM tb_buah_tb ORDER BY id_buah");
                        ?>
                    <thead>
                    <tr>
                      <th>Nama buah</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php if(mysqli_num_rows($query)>0){ ?>
                                <?php
                                   
                                    while($data = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    
                                    <td><?php echo str_replace('_', ' ',$data["nama_buah"]); ?></td>
                                  
                                    <td>
                                       
                                      <a href="<?=url($url.'&ubah&id='.$data['id_buah'])?>" class="external"><img src="<?=templates()?>images/icons/black/edit1.png"> Edit</a>

                                      <a href="<?=url($url.'&hapus&id='.$data['id_buah'])?>" class="external" onclick="return confirm('Hapus data?')"> <img src="<?=templates()?>images/icons/black/edit1.png"></a> </a>
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