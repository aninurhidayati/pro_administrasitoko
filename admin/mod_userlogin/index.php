  <?php
  include_once ('menuCtrl.php');
  if(!isset($_GET['act'])){
  ?>
  <a href="?modul=mod_userlogin&act=add" class="btn btn-primary btn-xs mb-1"> <i class="bi bi-folder-plus "> </i> Tambah Data </a>
  <table class="table table-bordered "> 
      <tr> 
          <th> ID user</th>
          <th> Username</th>
          <th> Password </th>
          <th> Is_active </th>
          <th> Action </th>
      </tr>
      <?php
      $qry_dt_member= mysqli_query($connect_db,"select * from tb_userlogin order by id_user DESC")or die("gagal akses tabel tb_userlogin".mysqli_error($connect_db));
      while($row = mysqli_fetch_array($qry_dt_member)){
      ?>
      <tr>
          <td><?php echo $row['id_user'];?></td>
          <td><?=$row['username']; ?></td>
          <td><?php echo $row['password']; ?></td>
          <td><?php echo $row['is_active']; ?></td>
          <td>
              <div class="d-grid gap-1 d-md-block">
              <a href="?modul=mod_userlogin&act=edit&id=<?= $row['id_user']; ?>" class="btn btn-xs btn-primary"> <i class="bi bi-pencil-square" > </i> edit </a>
              <a href="?modul=mod_userlogin&act=delete&id=<?= $row["id_user"]; ?>" class="btn btn-xs btn-warning bg-21"> <i class="bi bi-x-lg"></i> Delete</a>
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
      <form action="mod_userlogin/menuCtrl.php?modul=mod_userlogin&act=save" method="post">
      <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="id_user"> ID User </label>
    </div>  
    <div class="col-md-5"> 
      <input type="text "name="id_user" class="form-control">
      </div>
      <div class="col-md-1"></div>
      </div>
      <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="username" > Username </label>
    </div>  
    <div class="col-md-5"> 
      <input type="text "name="username" class="form-control">  
      </div>
      <div class="col-md-1"></div>
      </div>
      <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="password" > Password </label>
    </div>  
    <div class="col-md-5"> 
      <input type="text "name="password" class="form-control">  
      </div>
  </div>
  <!-- <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="is_active" > Is Active </label>
    </div>  
    <div class="col-md-5"> 
      <input type="text "name="is_active" class="form-control">  
      </div>
  </div> -->
      <div class="row pt-2">
      <div class="col-md-2"> 
    </div>  
    <div class="col-md-5"> 
    <input type="checkbox" name="is_active">active
      </div>
      <div class="col-md-1"></div>
      </div>
      <div class="row pt-2">
      <div class="col-md-2"> 
    </div>  
      <div class="col-md-5"> 
      <div class="d-grid gap-2 d-md-block">
      <a href="?modul=mod_userlogin" type="cancel" class="btn btn-warning"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
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
      <form action="mod_userlogin/menuCtrl.php?modul=mod_menu&act=update" method="POST">
      <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="id_user"> ID User </label>
    </div>  
    <div class="col-md-5"> 
      <input type="text "name="id_user" class="form-control" value="<?php echo $data['id_user']; ?>">  
      </div>
      <div class="col-md-1"></div>
      </div>
      <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="username" > Username </label>
    </div>  
    <div class="col-md-5"> 
      <input type="text "name="username" class="form-control" value="<?php echo $data['username']; ?>">  
      </div>
      <div class="col-md-1"></div>
      </div>
      <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="password" > Password </label>
    </div>  
    <div class="col-md-5"> 
      <input type="text "name="password" class="form-control" value="<?php echo $data['password']; ?>">  
      </div>
      <!-- <div class="row pt-2">
      <div class="col-md-2"> 
      <label for="username" class="form-label" name="is_active" > Is_Active </label>
    </div>  
    <div class="col-md-5"> 
      <input type="text "name="is_active" class="form-control">  
      </div>
  </div> -->
      <div class="row pt-2">
      <div class="col-md-2"> 
    </div>  
    <div class="col-md-5"> 
    <input type="checkbox" name="is_active" <?php echo $data['is_active'] == 1 ? "checked" : "" ?>> active
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
  ?>

