
<?php
include 'connection.php'; 
include 'navbar.php';

echo"<br>";
echo"<br>";
echo"<br>";




$taskname = $startdate = $enddate = $status = $id="";

$sql = "SELECT * FROM crud";
$result = mysqli_query($con, $sql);

if ($result) {
    echo "<table class='styled-table my-4' id='myTable'>";
    echo "<thead>
            <tr>
                <th>Task Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>ACTIONS</th>
            </tr>
         
            </thead>
          <tbody>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $taskname = ($row['taskname']); 
        $startdate = ($row['startdate']);
        $enddate = ($row['enddate']);
        $status = ($row['status']);
        
        
        echo "<tr>
        <td>$taskname</td>
        <td>$startdate</td>
        <td>$enddate</td>
        <td>$status</td>
        <td>
            <a href='edit.php?id=$id' class='btn btn-success'>Edit</a>
            <a href='delete.php?id=$id' class='btn btn-danger' onclick=\"return confirm('Are you sure you want to delete this task?');\">Delete</a>
        </td>
    </tr>";
    
    
    }
    
    echo "</tbody>
    </table>"; 
} else {
    echo "Error: " . mysqli_error($con); 
}


mysqli_close($con);
?>

<?php
include 'mainstyle.php';
?>
