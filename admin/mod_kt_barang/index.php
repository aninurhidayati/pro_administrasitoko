  <?php
  include_once ('menuCtrl.php');
  if(!isset($_GET['act'])){
  ?>
  <a href="?modul=mod_kt_barang&act=add" class="btn btn-primary btn-xs mb-1"> <i class="bi bi-folder-plus "> </i> Tambah Data </a>
  <table class="table table-bordered "> 
      <tr> 
          <th> ID kategori barang</th>
          <th> Kategori Barang </th>
          <th> Action </th>
      </tr>
      <?php
      $qry_dt_member= mysqli_query($connect_db,"select * from tb_kt_barang order by id_kt_barang DESC")or die("gagal akses tabel tb_kt_barang".mysqli_error($connect_db));
      while($row = mysqli_fetch_array($qry_dt_member)){
      ?>
      <tr>
          <td><?php echo $row['id_kt_barang'];?></td>
          <td><?=$row['kategori_barang']; ?></td>
          <td>
              <div class="d-grid gap-1 d-md-block">
              <a href="?modul=mod_kt_barang&act=edit&id=<?= $row['id_kt_barang']; ?>" class="btn btn-xs btn-primary"> <i class="bi bi-pencil-square" > </i> edit </a>
              <a href="?modul=mod_kt_barang&act=delete&id=<?= $row['id_kt_barang']; ?>" class="btn btn-xs btn-warning "> <i class="bi bi-x-lg"></i> Delete</a>
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
      <form action="mod_kt_barang/menuCtrl.php?modul=mod_kt_barangf&act=save" method="post">
      <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="id_kat_barang"> ID Kategori Barang </label>
    </div>  
    <div class="col-md-5"> 
      <input type="text "name="id_kat_barang" class="form-control">  
      </div>
      <div class="col-md-1"></div>
      </div>
      <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="kat_barang" > Kategori Barang  </label>
    </div>  
    <div class="col-md-5"> 
      <input type="text "name="kat_barang" class="form-control">  
      </div>
      <div class="col-md-1"></div>
      </div>
      <div class="row pt-2">
      <div class="col-md-2"> 
    </div>  
    <div class="col-md-5"> 
    <input type="checkbox" name="ck_aktif"/> import
      </div>
      <div class="col-md-1"></div>
      </div>
      <div class="row pt-2">
      <div class="col-md-2"> 
    </div>  
    <!--  -->
      <div class="col-md-5"> 
      <div class="d-grid gap-2 d-md-block">
      <button class="btn btn-secondary" type="reset" ><i class="bi bi-x" name="reset" > </i> Batal </button>
      <a href="?modul=mod_kt_barang" type="cancel" class="btn btn-warning"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
      <button class="btn btn-primary" type="submit"><i class="bi bi-download" name="simpan" ></i> Simpan </button>
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
      <form action="mod_kt_barang/menuCtrl.php?modul=mod_kt_barang&act=update" method="POST">
      <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="id_kat_barang"> ID Kategori Barang </label>
    </div>  
    <div class="col-md-5"> 
      <input type="text "name="id_kat_barang" class="form-control" value="<?php echo $data['id_kt_barang']; ?>">  
      </div>
      <div class="col-md-1"></div>
      </div>
      <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="kat_barang"> Kategori Barang </label>
    </div>  
    <div class="col-md-5"> 
      <input type="text "name="kat_barang"  class="form-control" value="<?php echo $data['kategori_barang']; ?>">
      </div>
      <div class="col-md-1"></div>
      </div>
      <div class="row pt-2">
      <div class="col-md-2"> 
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

