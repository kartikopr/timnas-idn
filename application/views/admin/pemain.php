
<div class="container">
<ul class ="nav navbar-nav navbar-right">
    <li><a class ="btn btn-danger btn-md" href="<?php echo site_url('Login/logout')?>">Logout</a></li> 
</ul>
    <h3>Data Pemain Timnas</h3>
    <br>                                                                                
      <div class="table-responsive">          
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Pemain</th>
              <th>Posisi Bermain</th>
              <th>Klub</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($sql->result() as $obj1){ ?>
              <tr>  
                <td><?php echo $obj1->no; ?></td>
                <td><?php echo $obj1->nama; ?></td>
                <td><?php echo $obj1->posisi; ?></td>
                <td><?php echo $obj1->klub; ?></td>
                <td>
                  <a class ="btn btn-success btn-md" href="<?php echo base_url(); ?>Admin/ubah/<?php echo $obj1->no; ?>">Edit</a> 
                  <a class = "btn btn-danger btn-md" href="<?php echo base_url(); ?>Admin/hapus/<?php echo $obj1->no; ?>">Hapus</a>
                </td>
                  
              </tr>
            <?php } ?>
              
          </tbody>
        </table>

          <a href="<?php echo base_url(); ?>Admin/tambah" class="btn btn-primary" role="button">Tambah</a> 
          </div>
        </div>   
    
    