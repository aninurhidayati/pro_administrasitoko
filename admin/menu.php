<?php 
        $menu = array (
            array ( "id"=>"01","nm_menu"=>"User Login","link"=>"home.php"),
            array ( "id"=>"02","nm_menu"=>"Kategori Barang","link"=>"#"),
            array ( "id"=>"03","nm_menu"=>"Data Barang","link"=>"mod_berita"),
            array ( "id"=>"04","nm_menu"=>"Data Member","link"=>"mod_menu"),
            array ( "id"=>"05","nm_menu"=>"Data Pembelian","link"=>"mod_menu")
        );
        /*$qry_menu = mysqli_query($connect_db,"select * from mst_menu") or die ("view menu").mysqli_error($connect_db);*/
    ?>
    <div class="sidebar"> 
    <header> Pilihan menu </header>
    <?php
        foreach ($menu as $mn){
        /*while($row = mysqli_fetch_array($qry_menu)){*/
       ?>
       <a href="?modul=<?php echo $mn['link']?>">
        <ul>
           <li class="list-group-item"><?php echo $mn['nm_menu'];?> <i class="bi bi-code"> </i></li>
        </ul>
        </a> 
            <?php } ?>
    </div>