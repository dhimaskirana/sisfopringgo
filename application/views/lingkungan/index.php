<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  <div class="content p-4">

        <h2 class="mb-4"><?php echo $title_page; ?></h2>

        <div class="alert alert-info" role="alert">
        Halaman ini masih dalam tahap pengembangan!
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kode Lingkungan</th>
                              <th scope="col">Nama Lingkungan</th>
                              <th scope="col">Nama Wilayah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                        if( ! empty($data_lingkungan)){ // Jika data data_pengguna tidak sama dengan kosong, artinya jika data siswa ada
                          foreach($data_lingkungan as $data){
                            echo "<tr>
                            <td>".$no."</td>
                            <td>".$data->lingkungan."</td>
                            <td>".$data->ket."</td>
                            <td>".$data->nmwilayah."</td>
                            </tr>";
                            $no++;
                          }
                            }else{ // Jika data siswa kosong
                              echo "Data Tidak Ada";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div><!-- .content p-4 -->