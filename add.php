<?php
include 'connection.php';
include 'navbar.php';
$insert=false;
?>


<?php
$taskname=$startdate=$enddate=$status="";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $taskname=$_POST['taskname'];
    $startdate=$_POST['startdate'];
    $enddate=$_POST['enddate'];
    $status=$_POST['status'];

}
if (!empty($taskname) && !empty($startdate) && !empty($enddate) && !empty($status)) {
$sql="INSERT INTO `crud` (`taskname`, `startdate`, `enddate`, `status`) VALUES ('$taskname','$startdate','$enddate','$status')";

$result=mysqli_query($con,$sql);

if($result){
    $insert= true;
}
else{
    echo "not submitted!";
}
}

?>

<?php
if ($insert) {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>SUCCESS!</strong> Record has been submitted.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
</button>
          </div>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: skyblue;
        }
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="form-container my-5">
        <h2>Task Form</h2>
        <form action="add.php" method="post">
            <label for="task_name">Task Name:</label>
            <input type="text" id="taskname" name="taskname" required>

            <label for="startdate">Start Date:</label>
            <input type="date" id="startdate" name="startdate" required>

            <label for="enddate">End Date:</label>
            <input type="date" id="enddate" name="enddate" required>

            <label for="status">Status:</label>
            <select id="status" name="status" required>
                <option value="">Select Status</option>
                <option value="Not Started">Not Started</option>
                <option value="In Progress">In Progress</option>
                <option value="Completed">Completed</option>
            </select>

            <button type="submit">ADD TASK</button>
        </form>
    </div>

</body>
</html>
