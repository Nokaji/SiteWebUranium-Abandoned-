<?php
session_start();

if(isset($_SESSION['id'])){

}else{
    header("Location: connexion");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['pseudo'];?> | UraniumV1</title>
</head>
<body>
    <?php 
    echo $_SESSION['id'];
    echo $_SESSION['pseudo'];
    echo $_SESSION['mail'];
    ?>
</body>
</html>