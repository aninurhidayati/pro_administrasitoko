<?php
include_once ('menuCtrl.php');
if(!isset($_GET['act'])){
?>
<a href="?modul=mod_dt_member&act=add" class="btn btn-primary btn-xs mb-1"> <i class="bi bi-folder-plus "> </i> Tambah Data </a>
<table class="table table-bordered "> 
    <tr> 
        <th> ID Member</th>
        <th> Nama Member</th>
        <th> Jenis Kelamin</th>
        <th> Alamat </th>
        <th> Pekerjaan </th>
        <th> Action </th>
    </tr>
    <?php
    $qry_dt_member= mysqli_query($connect_db,"select * from tb_dt_member order by id_member DESC")or die("gagal akses tabel mst_menu".mysqli_error($connect_db));
    while($row = mysqli_fetch_array($qry_dt_member)){
    ?>
    <tr>
        <td><?php echo $row['id_member'];?></td>
        <td><?=$row['nama_member']; ?></td>
        <td><?php echo $row['jenis_kelamin']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td><?php echo $row['pekerjaan']; ?></td>
        <td>
            <div class="d-grid gap-1 d-md-block">
            <a href="?modul=mod_dt_member&act=edit&id=<?= $row['id_member']; ?>" class="btn btn-xs btn-primary"> <i class="bi bi-pencil-square" > </i> edit </a>
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
    <form action="mod_dt_member/menuCtrl.php?modul=mod_dt_member&act=save" method="post">
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label" name="id_member"> ID Member </label>
  </div>  
  <div class="col-md-5"> 
    <input type="text "name="id_member" class="form-control">  
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label" name="nm_member" > Nama Member </label>
  </div>  
  <div class="col-md-5"> 
    <input type="text "name="nm_member" class="form-control">  
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label" name="jk" > Jenis Kelamin </label>
  </div>  
  <div class="col-md-5"> 
    <input type="text "name="jk" class="form-control">  
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label" name="alamat" > Alamat </label>
  </div>  
  <div class="col-md-5"> 
    <input type="text "name="alamat" class="form-control">  
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label" name="pekerjaan" > Pekerjaan </label>
  </div>  
  <div class="col-md-5"> 
    <input type="text" name="pekerjaan" class="form-control">  
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
else if (isset($_GET['act']) && ($_GET['act']== "edit")){
?>
<div class="row">
    <h3><?php echo $judul; ?></h3>
    <form action="mod_dt_member/menuCtrl.php?modul=mod_dt_member&act=save" method="post">
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label" name="id_member"> ID Member </label>
  </div>  
  <div class="col-md-5"> 
    <input type="text "name="id_member" class="form-control">  
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label" name="nm_member" > Nama Member </label>
  </div>  
  <div class="col-md-5"> 
    <input type="text "name="nm_member" class="form-control">  
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label" name="jk" > Jenis Kelamin </label>
  </div>  
  <div class="col-md-5"> 
    <input type="text "name="jk" class="form-control">  
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label" name="alamat" > Alamat </label>
  </div>  
  <div class="col-md-5"> 
    <input type="text "name="alamat" class="form-control">  
    </div>
    <div class="col-md-1"></div>
    </div>
    <div class="row pt-2">
    <div class="col-md-2"> 
    <label for="username" class="form-label" name="pekerjaan" > Pekerjaan </label>
  </div>  
  <div class="col-md-5"> 
    <input type="text" name="pekerjaan" class="form-control">  
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

