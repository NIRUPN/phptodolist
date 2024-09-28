<?php
// Include the database connection
include 'connection.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Get the ID from the URL
    $id = $_GET['id'];

    
    echo "ID received: $id<br>";
   
    if (is_numeric($id)) {
        
        $sql = "DELETE FROM crud WHERE id = $id"; 

        if (mysqli_query($con, $sql)) {
            echo "Task with ID $id deleted successfully.";
          
            header("Location: main.php");
            exit();
        } else {
            echo "Error deleting task: " . mysqli_error($con);
        }
    } else {
        echo "Invalid ID provided.";
    }
} else {
    echo "No ID provided.";
}

mysqli_close($con);
?>
