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
    mysqli_query($connect_db,"insert into tb_dt_member(nama_member,jenis_kelamin,alamat,pekerjaan)
    values ('$namamember','$jk','$alamat','$pekerjaan')") or die(mysqli_error($connect_db))
    ; 
}else if(isset($_GET['act']) && ($_GET['act']== "update")){

}   
?>
