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
    $qdata = mysqli_query($connect_db,"select * from tb_kt_barang where id_kt_barang=$idkey") or die(mysqli_error($connect_db));
    $data = mysqli_fetch_array($qdata);
    $aktif = $data['made_from']; //value dari tabel di kolom is_active
	if($aktif == 1){
		$check = "checked";
	} 
	else{
		$check = "";
	}
}else if (isset($_GET['act']) && ($_GET['act']== "save")){
    /*echo "Proses berhasil" ;*/
    $idkatbarang = $_POST['id_kat_barang'] ;
    $katbarang = $_POST['kat_barang'];
    /*$aktif = $_POST['ck_aktif'];*/
    if(isset($_POST['ck_aktif'])){
        $aktif = "import" ;
    }else{
        $aktif = "export" ;
    }
    $qinsert = mysqli_query($connect_db,"insert into tb_kt_barang(id_kt_barang,kategori_barang,made_from) 
    values ('$idkatbarang','$katbarang','$aktif')") or die(mysqli_error($connect_db));
    if($qinsert){
		//ketik proses simpan berhasil
		header("Location: http://localhost/pro_administrasitoko/admin/home.php?modul=mod_kt_barang");
	}
}else if(isset($_GET['act']) && ($_GET['act']== "update")){
    $in_idkatbarang = $_POST['id_kat_barang'];
	$in_katbarang = $_POST['kat_barang'];
	if(isset($_POST['ck_aktif'])){
		$aktif = "import";
	}
	else{
		$aktif = "export";
	}
	//query untuk simpan
	$qinsert = mysqli_query($connect_db, 
			"UPDATE tb_kt_barang SET id_kt_barang='$in_idkatbarang', kategori_barang='$in_katbarang', made_from='$aktif' WHERE id_kt_barang='$in_idkatbarang'")
			or die (mysqli_error($connect_db));
	if($qinsert){
		//ketik proses simpan update berhasil
		header("Location: http://localhost/pro_administrasitoko/admin/home.php?modul=mod_kt_barang");
	}
}else if(isset($_GET['act']) && ($_GET['act']== "delete")){
	//jika ada send variabel act=edit, tampil form edit/ubah data
	$idkey = $_GET['id']; //dapat dari URL
	$qdelete = mysqli_query($connect_db,"DELETE from tb_kt_barang where id_kt_barang=$idkey")or die(mysqli_error($connect_db));
	if($qdelete){
		header("Location: http://localhost/pro_administrasitoko/admin/home.php?modul=mod_kt_barang");
	}
}
?>
