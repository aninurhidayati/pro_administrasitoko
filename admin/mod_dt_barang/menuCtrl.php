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
    $qdata = mysqli_query($connect_db,"select * from tb_dt_barang where id_barang=$idkey") or die(mysqli_error($connect_db));
    $data = mysqli_fetch_array($qdata);
    $aktif = $data['is_active'];
    if($aktif == 1){
        $check = "checked";
    }else{
        $check = "";
    }
}else if (isset($_GET['act']) && ($_GET['act']== "save")){
    /*echo "Proses berhasil" ;*/
    $idbarang = $_POST['id_barang'] ;
    $namabarang = $_POST['nm_barang'];
    $jmlbrg= $_POST['jml_brg'];
    /*$aktif = $_POST['ck_aktif'];*/
    if(isset($_POST['ck_aktif'])){
        $aktif = 1 ;
    }else{
        $aktif = 0 ;
    }
    echo $namabarang;
    $qinsert = mysqli_query($connect_db,"INSERT into tb_dt_barang(id_barang,nama_barang,jumlah_barang)
    VALUES ('$idbarang','$namabarang','$jmlbrg')") or die(mysqli_error($connect_db));
    if($qinsert){
		//ketik proses simpan berhasil
		header("Location: http://localhost/pro_administrasitoko/admin/home.php?modul=mod_dt_barang");
	}
}else if(isset($_GET['act']) && ($_GET['act']== "update")){
    $in_idbrg =$_POST['id_barang'];
    $in_nmbrg =$_POST['nm_barang'];
    $in_jmlbrg =$_POST['jml_brg'];
    $qinsert = mysqli_query(
        $connect_db, "UPDATE tb_dt_barang SET nama_barang='$in_nmbrg', jumlah_barang='$in_jmlbrg' WHERE id_barang='$in_idbrg'")
		or die (mysqli_error($connect_db));
	if($qinsert){
		//ketik proses simpan update berhasil
		header("Location: http://localhost/pro_administrasitoko/admin/home.php?modul=mod_dt_barang");
	}
}else if(isset($_GET['act']) && ($_GET['act']== "delete")){
	//jika ada send variabel act=edit, tampil form edit/ubah data
	$idkey = $_GET['id']; //dapat dari URL
	$qdelete = mysqli_query($connect_db,"DELETE from tb_dt_barang where id_barang=$idkey")or die(mysqli_error($connect_db));
	if($qdelete){
		header("Location: http://localhost/pro_administrasitoko/admin/home.php?modul=mod_dt_barang");
	}
}
?>
