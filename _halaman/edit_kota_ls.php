

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<?php
  $title="Edit Data"; 
  $url12='edit_kota_ls'; 
  $url='edit_datasawah_kotategal';

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
        $id_kecamatan=  $_POST['id_kecamatan'];
        $nama_kecamatan = $_POST['nama_kecamatan'];
        $lahan_sawah = $_POST['lahan_sawah'];
        $lahan_bukansawah = $_POST['lahan_bukansawah'];
        $jumlah = $_POST['jumlah'];
        mysqli_query($connection,"UPDATE tb_lahan_kc set nama_kecamatan='$nama_kecamatan', lahan_sawah='$lahan_sawah', lahan_bukansawah='$lahan_bukansawah', jumlah='$jumlah' where id_kecamatan='$id_kecamatan'");
    ?>
  
  <script type="text/javascript">
    window.alert("Sukses Diubah");
    window.location.href="<?=url('edit_datasawah_kotategal')?>";
  </script>

  <?php

}

if(isset($_GET['hapus'])){
      include 'koneksi.php';
      $id_kecamatan = $_GET['id'];
      mysqli_query($connection,"DELETE from tb_lahan_kc where id_kecamatan='$id_kecamatan'");
}

if(isset($_GET['ubah']) AND isset($_GET['id'])) {
  $id=$_GET['id'];
  include "koneksi.php";
  $data = mysqli_query($connection,"SELECT * from tb_lahan_kc where id_kecamatan='$id'");
  while($d = mysqli_fetch_array($data)){
  $id_kecamatan=  $d['id_kecamatan'];
  $nama_kecamatan= $d['nama_kecamatan'];
  $lahan_sawah= $d['lahan_sawah'];
  $lahan_bukansawah=$d['lahan_bukansawah'];
  $jumlah=$d['jumlah'];
  }
?> <!-- Judul Halaman -->


  <div class="container">
    <form method="post" enctype="multipart/form-data">
      <?=input_hidden('id_kecamatan',$id_kecamatan)?>
    
      <div class="form-group">
        <label>Nama Kecamatan</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_text('nama_kecamatan', $nama_kecamatan)?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Lahan Sawah</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_number('lahan_sawah',  $lahan_sawah)?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Lahan Bukan Sawah</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_number('lahan_bukansawah', $lahan_bukansawah)?>
          </div>
        </div>
      </div>

        <div class="form-group">
        <label>Jumlah</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_number('jumlah',  $jumlah)?>
          </div>
        </div>
      </div>

      
      <div class="form-group">
        <button type="submit" name="simpan" class="btn btn-info" href="<?=url($url)?>"><i class="fa fa-save"></i> Simpan</button>
        <a href="<?=url('edit_datasawah_kotategal')?>" class="btn btn-danger external"> Kembali</a>
      </div>

    </form>


 <?php } else {?>

    <div class="page_single layout_fullwidth_padding">          
            <div class="table-responsive">
                <table class="table">
     
                       <?php
                        include "koneksi.php";
                        $query = mysqli_query($connection,"SELECT * FROM tb_lahan_kc ORDER BY id_kecamatan");
                        ?>
                    <thead>
                    <tr>
                      <th>Nama Kecamatan</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php if(mysqli_num_rows($query)>0){ ?>
                                <?php
                                   
                                    while($data = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    
                                    <td><?php echo str_replace('_', ' ',$data["nama_kecamatan"]); ?></td>
                                  
                                    <td>
                                       
                                      <a href="<?=url($url.'&ubah&id='.$data['id_kecamatan'])?>" class="external"><img src="<?=templates()?>images/icons/black/edit1.png"> Edit</a>

                                      <a href="<?=url($url.'&hapus&id='.$data['id_kecamatan'])?>" class="external" onclick="return confirm('Hapus data?')"> <img src="<?=templates()?>images/icons/black/edit1.png"></a> </a>
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