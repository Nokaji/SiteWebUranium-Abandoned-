<?php
if(isset($_SESSION['id'])){
    
}else{
    include "ressources/includes/comptes/noconnect.php";
}
?>
<div id="profile">
    <?php
    if(isset($_SESSION['id'])){
        include "ressources/includes/comptes/connect.php";
    }else{
        include "ressources/includes/comptes/noconnect.php";
    }
    ?>
</div>
<script type="text/javascript" src="ressources/js/popupprofile.js"></script>
<link rel="stylesheet" type="text/css" href="ressources/css/popupprofile.css">