<div class="container">
    <div class="panel panel-success"> 
        <div class="panel-heading"><h2>Form</h2></div> 

<br>
<?php
 
$no=""; $nama=""; $posisi=""; $klub="";  
 
if($pil == 'edit'){ 
	foreach ($sql->result() as $obj2) { 
		
		$no =  $obj2->no; 
        $nama = $obj2->nama; 
        $posisi = $obj2->posisi;
        $klub = $obj2->klub; 
                
    } 
}
 

?>
         
<form role="form" action="<?php echo base_url();?>Halaman/simpan/" method="post">

    <input type="hidden" name="pil" value="<?php echo $pil; ?>" class="form-control">

    <input type="hidden" name="no" value="<?php echo $no; ?>" class="form-control">
    
            <div class="form-group row">
                <div class="col-xs-2">
                    <label>Nama Pemain</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $nama;?>">
                        
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-2">
                    <label>Posisi</label>
                        <input type="text" class="form-control" name="posisi" value="<?php echo $posisi;?>">
                        
                </div>
            </div>
             
            <div class="form-group row">
                <div class="col-xs-2">
                    <label>Klub</label>
                        <input type="text" class="form-control" name="klub" value="<?php echo $klub;?>">
                        
                 </div>
            </div>
            
            <div class="form-group row">
                <div class="col-xs-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button href="<?php echo base_url();?>Admin/pemainAdmin" class="btn btn-warning">Kembali</a>
                </div>

            </div>
        </div>
</div>
    
</form>     
            
            
            
        