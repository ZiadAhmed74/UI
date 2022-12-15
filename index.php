<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: login.php');
    }else if($_SESSION['type']=='0'){
        header('Location: manager/');
    }else if($_SESSION['type']=='1'){
        header('Location: parent/');
    }else if($_SESSION['type']=='2'){
        header('Location: teacher/');
    }
    print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | school administartion system</title>
</head>
<body>
    <a href="logout.php">logout</a>
</body>
</html>