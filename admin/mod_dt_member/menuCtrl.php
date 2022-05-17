    <?php
    if (isset($_GET['act']) && ($_GET['act']== "update" || $_GET['act']== "save")){
    require_once('../../config/koneksi_db.php') ;
    require_once('../../config/config.php') ;
    }else{
        require_once('../config/koneksi_db.php') ;
        require_once('../config/config.php') ;
    }

    if (isset($_GET['act']) && ($_GET['act']== "add")){
        $judul = "form input data" ;
    }else if (isset($_GET['act']) && ($_GET['act']== "edit")){
        $judul = "form edit data" ;
        $idkey = $_GET['id'];
        $qdata = mysqli_query($connect_db,"select * from tb_dt_member where id_member=$idkey") or die(mysqli_error($connect_db));
        $data = mysqli_fetch_array($qdata);
        /*$aktif = $data['is_active'];
        if($aktif == 1){
            $check = "checked";
        }else{
            $check = "";
        }*/
    }else if (isset($_GET['act']) && ($_GET['act']== "save")){
        /*echo "Proses berhasil" ;*/
        $idmember = $_POST['id_member'] ;
        $namamember = $_POST['nm_member'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $pekerjaan = $_POST['pekerjaan'];
        /*$aktif = $_POST['ck_aktif'];*/
        /*if(isset($_POST['ck_aktif'])){
            $aktif = 1 ;
        }else{
            $aktif = 0 ;
        }*/
        echo $namamember;
        mysqli_query($connect_db,"INSERT INTO tb_dt_member(id_member,nama_member,jenis_kelamin,alamat,pekerjaan)
        VALUES ('$idmember','$namamember','$jk','$alamat','$pekerjaan')") or die(mysqli_error($connect_db))
        ; 
    }else if(isset($_GET['act']) && ($_GET['act']== "update")){
        $in_idmember = $_POST['id_member'] ;
        $in_namamember = $_POST['nm_member'];
        $in_jk = $_POST['jk'];
        $in_alamat = $_POST['alamat'];
        $in_pekerjaan = $_POST['pekerjaan'];
        $qinsert = mysqli_query($connect_db, 
        "UPDATE tb_dt_member SET id_member='$in_idmember', nama_member='$in_namamember', jenis_kelamin='$in_jk', alamat='$in_alamat', pekerjaan='$in_pekerjaan' WHERE id_member='$in_idmember'")
        or die (mysqli_error($connect_db));
        if($qinsert){
            //ketik proses simpan update berhasil
            header("Location: http://localhost/pro_administrasitoko/admin/home.php?modul=mod_dt_member");
        }
    }else if(isset($_GET['act']) && ($_GET['act']== "delete")){
        //jika ada send variabel act=edit, tampil form edit/ubah data
        $idkey = $_GET['id']; //dapat dari URL
        $qdelete = mysqli_query($connect_db,"DELETE from tb_dt_member where id_member=$idkey")or die(mysqli_error($connect_db));
        if($qdelete){
            header("Location: http://localhost/pro_administrasitoko/admin/home.php?modul=mod_dt_member");
        }
    }
    ?>
