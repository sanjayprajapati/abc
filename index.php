<!DOCTYPE html>
<html>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "test";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT id, sha_name, sha_status FROM swith_status";
    $result = $conn->query($sql);
    //echo $result;
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<br> id: ". $row["id"]. " - Name: ". $row["sha_name"]. " " . $row["sha_status"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    
    $conn->close();
    
?>
<!--<table>
    <th>
        <td>ID of Led</td>
        <td>Name of Led</td>
        <td>Status of Led</td>
        <td>ID of Led</td>
        <td>Name of Led</td>
        <td>Status of Led</td>
    </th>
    <tr>
        <td></td>
        <td>Name of Led</td>
        <td>Status of Led</td>
    </th>
</table>-->
</body>
</html>