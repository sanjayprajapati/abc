	
<?php
 
 header("Content-Type:application/json");
 include('connection.php');
  
 if (isset($_GET['id']) && $_GET['id']!="") {
  
 $id = $_GET['id'];
 $query = "SELECT * FROM `swith_status` WHERE id=$id";
 $result = mysqli_query($conn,$query);
 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
 $customerData['id'] = $row['id'];
 $customerData['sha_name'] = $row['sha_name'];
 $customerData['sha_status'] = $row['sha_status'];
 $response["switch_status"] = $customerData;
  
 } else {
 $response["status"] = "false";
 $response["message"] = "No customer(s) found!";
 }
 echo json_encode($response); exit;
  
 ?>