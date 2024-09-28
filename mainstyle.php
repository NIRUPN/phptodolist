
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.7/css/dataTables.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.1.7/js/dataTables.min.js"></script>
    <style>

    body{
        background-color: skyblue;
    }
    .styled-table {
        width: 30%; /* Set the width to a smaller percentage */
        margin: 20px auto; /* Center the table */
        border-collapse: collapse;
        font-size: 14px; /* Reduced font size */
    }
    .styled-table thead tr {
        background-color: #4CAF50;
        color: white;
    }
    .styled-table th, .styled-table td {
        padding: 8px 10px; 
        border: 1px solid #ddd;
    }
    .styled-table tbody tr {
        border-bottom: 1px solid #ddd;
        background-color: skyblue;
    }
    .styled-table tbody tr:nth-child(even) {
        background-color: skyblue;
       
    }
    .styled-table tbody tr:hover {
         background-color: #f1f1f1; 
    }
    .styled-table tbody td{
        font-size: 20px;
        font-family: cursive;
    }
</style>


</head>
<body>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable(); // Initialize DataTable on DOM ready
    });
</script>

</body>
</html>