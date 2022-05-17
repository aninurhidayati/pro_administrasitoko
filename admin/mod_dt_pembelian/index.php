  <?php
  include_once ('menuCtrl.php');
  if(!isset($_GET['act'])){
  ?>
  <a href="?modul=mod_dt_pembelian&act=add" class="btn btn-primary btn-xs mb-1"> <i class="bi bi-folder-plus "> </i> Tambah Data </a>
  <table class="table table-bordered "> 
      <tr> 
          <th> No.Transaksi</th>
          <th> Nama Barang</th>
          <th> Harga Barang</th>
          <th> Jumlah </th>
          <th> Total</th>
          <th> Action </th>
      </tr>
      <?php
      $qry_dt_member= mysqli_query($connect_db,"select * from tb_dt_pembelian order by no_trans DESC")or die("gagal akses tabel tb_dt_pembelian".mysqli_error($connect_db));
      while($row = mysqli_fetch_array($qry_dt_member)){
      ?>
      <tr>
          <td><?php echo $row['no_trans'];?></td>
          <td><?=$row['nama_barang']; ?></td>
          <td><?php echo $row['harga_barang']; ?></td>
          <td><?php echo $row['jumlah']; ?></td>
          <td><?php echo $row['total']; ?></td>
          <td>
              <div class="d-grid gap-1 d-md-block">
              <a href="?modul=mod_dt_pembelian&act=edit&id=<?= $row['no_trans']; ?>" class="btn btn-xs btn-primary"> <i class="bi bi-pencil-square" > </i> edit </a>
              <a href="?modul=mod_dt_pembelian&act=delete&id=<?= $row['no_trans']; ?>" class="btn btn-xs btn-warning "> <i class="bi bi-x-lg"></i> Delete</a>
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
      <form action="mod_dt_pembelian/menuCtrl.php?modul=mod_dt_pembelian&act=save" method="post">
      <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="no_trans"> No Transaksi </label>
    </div>  
    <div class="col-md-5"> 
      <input type="text "name="no_trans" class="form-control">  
      </div>
      <div class="col-md-1"></div>
      </div>
      <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="nm_brg" > Nama Barang </label>
    </div>  
    <div class="col-md-5"> 
      <input type="text "name="nm_brg" class="form-control">  
      </div>
      <div class="col-md-1"></div>
      </div>
      <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="hrg_brg" > harga Barang</label>
    </div>  
    <div class="col-md-5"> 
      <input type="text "name="hrg_brg" class="form-control">  
      </div>
      <div class="col-md-1"></div>
      </div>
      <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="jlm" > Jumlah </label>
    </div>  
    <div class="col-md-5"> 
      <input type="text "name="jml" class="form-control">  
      </div>
      <div class="col-md-1"></div>
      </div>
      <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="total" > Total </label>
    </div>  
    <div class="col-md-5"> 
      <input type="text" name="total" class="form-control">  
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
      <a href="?modul=mod_kt_barang" type="cancel" class="btn btn-warning"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
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
      <form action="mod_dt_pembelian/menuCtrl.php?modul=mod_dt_pembelian&act=update" method="POST">
      <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="no_trans"> No Transaksi </label>
    </div>  
    <div class="col-md-5"> 
      <input type="text "name="no_trans" class="form-control" value="<?php echo $data['no_trans']; ?>">  
      </div>
      <div class="col-md-1"></div>
      </div>
      <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="nm_brg" > Nama Barang </label>
    </div>  
    <div class="col-md-5"> 
      <input type="text "name="nm_brg" class="form-control" value="<?php echo $data['nama_barang']; ?>">  
      </div>
      <div class="col-md-1"></div>
      </div>
      <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="hrg_brg" > harga Barang</label>
    </div>  
    <div class="col-md-5"> 
      <input type="text "name="hrg_brg" class="form-control" value="<?php echo $data['harga_barang']; ?>">  
      </div>
      <div class="col-md-1"></div>
      </div>
      <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="jlm"> Jumlah </label>
    </div>  
    <div class="col-md-5"> 
      <input type="text "name="jml" class="form-control" value="<?php echo $data['jumlah']; ?>">  
      </div>
      <div class="col-md-1"></div>
      </div>
      <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="total"> Total </label>
    </div>  
    <div class="col-md-5"> 
      <input type="text" name="total" class="form-control" value="<?php echo $data['total']; ?>">  
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

