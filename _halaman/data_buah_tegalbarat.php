<?php
  $title="Data Kecamatan"; 
?> <!-- Judul Halaman -->


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<div class="pages">
  <div data-page="tables" class="page no-toolbar no-navbar">
    <div class="page-content">
    
	<div class="navbarpages">
		<div class="navbar_left">
    <div class="logo_text"><a href="<?=url('beranda')?>" class="external"> <span>Web</span>GIS</a></div>
		</div>			
						
	</div>
     
    <div id="pages_maincontent">
     
     
    <div class="buttons-row">
                    <a href="<?=url('data_buah_tegalselatan')?>" class="tab-link button">Tegal Selatan</a>
                    <a href="<?=url('data_buah_tegaltimur')?>" class="tab-link button">Tegal Timur</a>
                    <a href="<?=url('data_buah_tegalbarat')?>" class="tab-link active button">Tegal Barat</a>
                    <a href="<?=url('data_buah_margadana')?>" class="tab-link button">Margadana</a>

                </div>
                <div class="page_single layout_fullwidth_padding">          
            <div class="table-responsive">
                <table class="table">
                <p> </p>
                <h5>Data Jumlah Panen Buah Kecamatan Tegal Barat</h5>

                     <?php
                        include "koneksi.php";
                        $query = mysqli_query($connection,"SELECT * FROM tb_buah_tb ORDER BY id_buah ");  
                        $no = 1;
                    ?>

                    <thead class="thead-dark">
                        <tr>
                        <th scope="col-sm"><p class="text-justify">No</p></th>
                        <th scope="col-sm"><p class="text-justify">Nama Buah</p></th>
                        <th scope="col-sm"><p class="text-justify">Jumlah Panen</p></th>
                       
                        </tr>
                    </thead>
                
                
                <tbody>
    
                     <?php if(mysqli_num_rows($query)>0){ ?>
                         <?php
                             while($data = mysqli_fetch_array($query)){
                         ?>
                    
                <tr>
                    <td> <?php echo $no++; ?></td>
                    <td><?php echo $data["nama_buah"];?></td>
                    <td><?php echo $data["jumlah_panen"];?></td>
                     
                  
                             
                </tr>

                    <?php  } ?>
                    <?php } ?>

                </tbody>
           
            </table>
            
            <a href="<?=url('data_kota')?>" class="btn btn-primary external"> Kembali</a>
        </div>
        </div>


        </div>
    </div>
</div>

