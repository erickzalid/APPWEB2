<?php

include("db.php");

if(isset($_POST['save'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Algo a salido mal");
    }

    $_SESSION['message'] = 'Guardado';
    $_SESSION['message_type'] = 'success';
        
    header("Location: index.php");
}

?>