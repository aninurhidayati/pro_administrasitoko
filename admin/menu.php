<?php 
        /*$menu = array (
            array ( "id"=>"01","nm_menu"=>"dashboard","link"=>"home.php"),
            array ( "id"=>"02","nm_menu"=>"Blog","link"=>"#"),
            array ( "id"=>"03","nm_menu"=>"Berita","link"=>"mod_berita"),
            array ( "id"=>"04","nm_menu"=>"setting menu","link"=>"mod_menu")
        );*/
        $qry_menu = mysqli_query($connect_db,"select * from tb_submenu") or die ("view menu").mysqli_error($connect_db);
        /*foreach ($menu as $mn){*/
        while($row = mysqli_fetch_array($qry_menu)){
       ?>
       <a href="?modul=<?php echo $row['folder_submenu']?>">
           <li class="list-group-item list-group-item-action list-group-item-warning text-right"><?php echo $row['nama_submenu'];?> <b><i class="bi bi-arrow-right"></i> </b></li>
        </a>  
            <?php } ?>