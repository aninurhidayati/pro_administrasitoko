	<?php
	if(isset($_GET['act']) && ($_GET['act']=="update" || $_GET['act']== "save")){
		require_once "../../config/koneksi_db.php";
		require_once "../../config/config.php";		
	}else{
		require_once "../config/koneksi_db.php";
		require_once "../config/config.php";
	}
	if(isset($_GET['act']) && ($_GET['act']== "add")){
		$judul = "Form Input Data";
	}else if(isset($_GET['act']) && ($_GET['act']== "edit")){
		$judul = "Form Edit Data";
		$idkey = $_GET['id']; //dapat dari URL
		$qdata = mysqli_query($connect_db,"select * from tb_userlogin where id_user=$idkey")or die(mysqli_error($connect_db));
		$data = mysqli_fetch_array($qdata);
		$aktif = $data['is_active']; //value dari tabel di kolom is_active
		if($aktif == 1){
			$check = "checked";
		} 
		else{
			$check = "";
		}
	}
	else if(isset($_GET['act']) && ($_GET['act']== "save")){
		//jika ada send variabel act=save, ketika proses simpan(insert)
		$id_user = $_POST['id_user'];
		$username = $_POST['username'];
		$pass = $_POST['password'];
		// $isactive =$_POST['is_active'];
		if(isset($_POST['is_active'])){
			$aktif = 1;
		}
		else{
			$aktif = 0;
		}
		//query untuk simpan
		$qinsert = mysqli_query($connect_db,"INSERT INTO tb_userlogin(username,password,is_active) VALUES('$username','$pass','$aktif')")
				or die (mysqli_error($connect_db));
		if($qinsert){
			//ketik proses simpan berhasil
			header("Location: http://localhost/pro_administrasitoko/admin/home.php?modul=mod_userlogin");
		}
	}
	else if(isset($_GET['act']) && ($_GET['act']== "update")){
		//jika ada send variabel act=update, ketika proses simpan ubah data
		$ins_id_user = $_POST['id_user'];
		$ins_username = $_POST['username'];
		$ins_pass = $_POST['password'];
		if(isset($_POST['is_active'])){
			$aktif = 1;
		}
		else{
			$aktif = 0;
		}
		//query untuk simpan
		$qinsert = mysqli_query($connect_db, 
				"UPDATE tb_userlogin SET id_user='$ins_id_user', username='$ins_username', password='$ins_pass', is_active=$aktif WHERE id_user='$ins_id_user'")
				or die (mysqli_error($connect_db));
		if($qinsert){
			//ketik proses simpan update berhasil
			header("Location: http://localhost/pro_administrasitoko/admin/home.php?modul=mod_userlogin");
		}
	}
	else if(isset($_GET['act']) && ($_GET['act']== "delete")){
		//jika ada send variabel act=edit, tampil form edit/ubah data
		$idkey = $_GET['id']; //dapat dari URL
		$qdelete = mysqli_query($connect_db,"DELETE from tb_userlogin where id_user=$idkey")or die(mysqli_error($connect_db));
		if($qdelete){
			header("Location: http://localhost/pro_administrasitoko/admin/home.php?modul=mod_userlogin");
		}
	}
	?>
