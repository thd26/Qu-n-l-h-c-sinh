
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

session_start();
include_once('config/connect.php');
$teacher_id = $_GET['teacher_id'];

if (isset($_SESSION['mail_user']) && isset($_SESSION['pass_user'])) {
    $sql = "DELETE FROM giaovien WHERE MaGV = '$teacher_id'";
    
    try {
        $query = mysqli_query($conn, $sql) ;
        header('location: index.php?page=teacher');
    }catch(Exception $e)
    { 
        header('location: index.php?page=teacher&param=true');

        
    }
}
?>
</body>
</html>