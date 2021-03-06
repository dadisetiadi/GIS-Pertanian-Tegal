<?php
  $title="Data Kelurahan di Kecamatan Tegal Barat"; 

  $url='edit_datakc_sawah';
  $url2='edit_ls_tegalselatan';
?> <!-- Judul Halaman -->


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<div class="pages">
  <div data-page="tables" class="page no-toolbar no-navbar">
    <div class="page-content">
    
	<div class="navbarpages">
		<div class="navbar_left">
    <div class="logo_text"><a href="<?=url('halaman_admin')?>" class="external"> <span>Web</span>GIS</a></div>
		</div>			
						
	</div>
     
    <div id="pages_maincontent">
     
     <div class="page_single layout_fullwidth_padding">          
            <div class="table-responsive">
                <table class="table">
                <p> </p>
                <h5>Data Luas Panen Rata-rata Produksi Padi</h5>

                <?php
                        include "koneksi.php";
                        $query = mysqli_query($connection,"SELECT * FROM tb_produksi_tegalselatan ORDER BY id_kelurahan");  
                        $no = 1;
                    ?>
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col-sm"><p class="text-justify">No</p></th>
                        <th scope="col-sm"><p class="text-justify">Kelurahan</p></th>
                        <th scope="col-sm"><p class="text-justify">Luas Panen</p></th>
                        <th scope="col-sm"><p class="text-justify">Produksi (ku/ha)</p></th>
                        <th scope="col-sm"><p class="text-justify">Produksi (ton)</p></th>
                        <th scope="col-sm"><p class="text-justify">Lahan Sawah (ha)</p></th>
                        <th scope="col-sm"><p class="text-justify">Lahan Bukan Sawah (ha)</p></th>
                        <th scope="col-sm"><p class="text-justify">Jumlah (ha)</p></th>
                        <th scope="col-sm"><p class="text-justify">Aksi</p></th>
                        </tr>
                    </thead>
                
                <tbody>
                    
                
                <?php if(mysqli_num_rows($query)>0){ ?>
                                <?php
                                   
                                    while($data = mysqli_fetch_array($query)){
                                ?>
                    
                <tr>
                    <td> <?php echo $no++; ?></td>
                    <td><?php echo $data["nama_kelurahan"];?></td>
                    <td><?php echo $data["luas_panen"];?></td>
                    <td><?php echo $data["rata_produksi_ha"];?></td>
                    <td><?php echo $data["rata_produksi_ton"];?></td>
                    <td><?php echo $data["lahan_sawah"];?></td>
                    <td><?php echo $data["lahan_bukan_sawah"];?></td>
                    <td><?php echo $data["jumlah"];?></td>
                    <td>
                    <a href="<?=url($url2.'&ubah&id='.$data['id_kelurahan'])?>" class="btn btn-success external"> <i class="external"></i>Ubah</a>
                    <a href="<?=url($url.'&hapus&id='.$data['id_kelurahan'])?>" class="btn btn-danger external" onclick="return confirm('Hapus data?')"> <i class="external">Hapus</i></a> </a>
                    </td>
                  
                             
                </tr>

                    <?php  } ?>
                    <?php } ?>

                </tbody>
           
            </table>
            <a href="<?=url('edit_datakc_sawah')?>" class="btn btn-primary external"> Kembali</a>
        </div>
        </div>


        </div>
    </div>
</div>

