<br>
  <div class="container">
      <h3>Daftar Pemain Tim Nasional</h3>
      <br><br>
                                                                                        
        <div class="table-responsive">          
          <table class="table table-bordered">
            <thead>
              <tr>
                
                <th>Nama Pemain</th>
                <th>Posisi</th>
                <th>Klub</th>
                
            </tr>
             </thead>
            <tbody>
              <tr> <?php foreach($sql->result() as $obj1): ?> </tr>
                <td><?php echo $obj1->nama; ?></td>
                <td><?php echo $obj1->posisi; ?></td>
                <td><?php echo $obj1->klub; ?></td>
                
                
                <?php endforeach; ?>
                
              
              </tbody>
            </table>
          </div>
        </div>
</div>