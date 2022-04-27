<?php
include_once ('menuCtrl.php');
if(!isset($_GET['act'])){
?>
<a href="?modul=mod_dt_barang&act=add" class="btn btn-primary btn-xs mb-1"> <i class="bi bi-folder-plus "> </i> Tambah Data </a>
<table class="table table-bordered "> 
    <tr> 
        <th> ID Barang</th>
        <th> Nama Barang</th>
        <th> Jumlah Barang</th>
    </tr>
    <?php
    $qry_dt_member= mysqli_query($connect_db,"select * from tb_dt_barang order by id_barang DESC")or die("gagal akses tabel tb_dt_barang".mysqli_error($connect_db));
    while($row = mysqli_fetch_array($qry_dt_member)){
    ?>
    <tr>
        <td><?php echo $row['id_barang'];?></td>
        <td><?=$row['nama_barang']; ?></td>
        <td><?php echo $row['jumlah_barang']; ?></td>
        <td>
            <div class="d-grid gap-1 d-md-block">
            <a href="?modul=mod_dt_barang&act=edit&id=<?= $row['id_barang']; ?>" class="btn btn-xs btn-primary"> <i class="bi bi-pencil-square" > </i> edit </a>
            <a href="" class="btn btn-xs btn-primary"> <i class="bi bi-trash-3"> </i> Hapus </a>
            </div>
      </td>
    </tr>
    <?php
    }
    ?>
</table>
<?php
}else if (isset($_GET['act']) && ($_GET['act']== "add")){
?>
<div class="row">
    <h3><?php echo $judul; ?></h3>
    <form action="mod_dt_barang/menuCtrl.php?modul=mod_dt_barangf&act=save" method="post">
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label" name="id_barang"> ID Barang </label>
  </div>  
  <div class="col-md-5"> 
    <input type="text "name="id_barang" class="form-control">  
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label" name="nm_barang" > Nama Barang </label>
  </div>  
  <div class="col-md-5"> 
    <input type="text "name="nm_barang" class="form-control">  
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label" name="jml_brg" > Jumlah Barang </label>
  </div>  
  <div class="col-md-5"> 
    <input type="text "name="jml_brg" class="form-control">  
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
  </div>  
  <div class="col-md-5"> 
   <input type="checkbox" name="ck_aktif"/> active
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
   </div>  
    <div class="col-md-5"> 
    <div class="d-grid gap-2 d-md-block">
    <button class="btn btn-secondary" type="reset" ><i class="bi bi-x" name="reset" > </i> Batal </button>
    <button class="btn btn-primary" type="submit"><i class="bi bi-download" name="simpan" > </i> Simpan </button>
    </div>
    <div class="col-md-1"></div>
    </div>
    </div>
    </form> 
  </div>  
</div>
<?php
}
else if (isset($_GET['act']) && ($_GET['act']== "edit")){
?>
<div class="row">
    <h3><?php echo $judul; ?></h3>
    <form action="mod_dt_barang/menuCtrl.php?modul=mod_dt_barang&act=save" method="post">
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label" name="id_barang"> ID Barang</label>
  </div>  
  <div class="col-md-5"> 
    <input type="text "name="id_barang" class="form-control">  
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label" name="nm_barang" > Nama Barang </label>
  </div>  
  <div class="col-md-5"> 
    <input type="text "name="nm_barang" class="form-control">  
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label" name="jml_brg" > Jumlah Barang </label>
  </div>  
  <div class="col-md-5"> 
    <input type="text "name="jml_brg" class="form-control">  
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
  </div>  
  <div class="col-md-5"> 
   <input type="checkbox" name="ck_aktif"/> active
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
   </div>  
    <div class="col-md-5"> 
    <div class="d-grid gap-2 d-md-block">
    <button class="btn btn-secondary" type="reset" ><i class="bi bi-x" name="reset" > </i> Batal </button>
    <button class="btn btn-primary" type="submit"><i class="bi bi-download" name="simpan" > </i> Simpan </button>
    </div>
    <div class="col-md-1"></div>
    </div>
    </form> 
  </div>  
</div>
<?php
}
?>

