<?php
include 'connection.php'; 
include 'navbar.php';



echo"<br>";
echo"<br>";
echo"<br>";


$taskname = $startdate = $enddate = $status = $id = "";


if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'] ; 


    $sql = "SELECT * FROM crud WHERE id = $id";
    $result = mysqli_query($con, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
       
        $row = mysqli_fetch_assoc($result);
        $taskname = $row['taskname'];
        $startdate = $row['startdate'];
        $enddate = $row['enddate'];
        $status = $row['status'];
    } else {
        echo "Task not found.";
        exit;
    }
} else {
    echo "No task ID provided.";
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $taskname = mysqli_real_escape_string($con, $_POST['taskname']);
    $startdate = mysqli_real_escape_string($con, $_POST['startdate']);
    $enddate = mysqli_real_escape_string($con, $_POST['enddate']);
    $status = mysqli_real_escape_string($con, $_POST['status']);

    
    $updateSql = "UPDATE crud SET taskname = '$taskname', startdate = '$startdate', enddate = '$enddate', status = '$status' WHERE id = $id";
    
    if (mysqli_query($con, $updateSql)) {
        echo "<script>alert('UPDATED SUCCESSFULL!!!')</script>";
        
       
        exit;
    } else {
        echo "Error updating task: " . mysqli_error($con);
    }
}
?>


<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h5>Edit Task</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="taskname" class="form-label">Task Name:</label>
                    <input type="text" class="form-control" name="taskname" id="taskname" value="<?php echo htmlspecialchars($taskname); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="startdate" class="form-label">Start Date:</label>
                    <input type="date" class="form-control" name="startdate" id="startdate" value="<?php echo htmlspecialchars($startdate); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="enddate" class="form-label">End Date:</label>
                    <input type="date" class="form-control" name="enddate" id="enddate" value="<?php echo htmlspecialchars($enddate); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Select Status:</label>
                    <select name="status" id="status" class="form-select" required>
                        <option value="Not Started" <?php if ($status === 'Not Started') echo 'selected'; ?>>Not Started</option>
                        <option value="In Progress" <?php if ($status === 'In Progress') echo 'selected'; ?>>In Progress</option>
                        <option value="Completed" <?php if ($status === 'Completed') echo 'selected'; ?>>Completed</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update Task</button>
            </form>
        </div>
    </div>
</div>

<?php
mysqli_close($con);
?>

<head>
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
</head>



