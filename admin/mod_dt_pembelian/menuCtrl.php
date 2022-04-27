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
    $qdata = mysqli_query($connect_db,"select * from tb_dt_pembelian where no_trans=$idkey") or die(mysqli_error($connect_db));
    $data = mysqli_fetch_array($qdata);
    /*$aktif = $data['is_active'];
    if($aktif == 1){
        $check = "checked";
    }else{
        $check = "";
    }*/
}else if (isset($_GET['act']) && ($_GET['act']== "save")){
    /*echo "Proses berhasil" ;*/
    $notrans = $_POST['no_trans'] ;
    $namabrg = $_POST['nm_brg'];
    $hargabrg = $_POST['hrg_brg'];
    $jumlah = $_POST['jml'];
    $total = $_POST['total'];
    /*$aktif = $_POST['ck_aktif'];*/
    /*if(isset($_POST['ck_aktif'])){
        $aktif = 1 ;
    }else{
        $aktif = 0 ;
    }*/
    echo "tambahdata Berhasil ";
    mysqli_query($connect_db,"insert into tb_dt_pembelian(nama_barang,harga_barang,jumlah,total)
    values ('$namabrg','$hargabrg','$jumlah','$total')") or die(mysqli_error($connect_db))
    ; 
}else if(isset($_GET['act']) && ($_GET['act']== "update")){

}   
?>
