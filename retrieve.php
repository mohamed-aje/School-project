<?php
include 'db.php'; 
include 'myhead.php';
$sql = "select * from studentinfo";
$result = $conn->query($sql);
if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.

echo "<table border='1'>
<tr>
<th> ID</th>
<th>first Name</th>
<th>Last Name</th>
<th>City</th>
<th>groupID</th>
</tr>";

    while($row = $result ->fetch_assoc()){
       // echo "id:" . $row["id"] . "First Name:". $row["fname"]."Last Name:". $row["lname"] 
        
       // ."City:". $row["city"]. "groupID:". $row["groupID"]
       // ."<br>";    
        

  echo "<td>" . $row['id'] . "</td>";

  echo "<td>" . $row['fname'] . "</td>";

  echo "<td>" . $row['lname'] . "</td>";

  echo "<td>" . $row['city'] . "</td>";
  echo "<td>" . $row['groupID'] . "</td>";



  echo "</tr>";

  }

echo "</table>";
    }

// You can type different sql queries based on your needs
// The output as of now does not look good. Your task is to format it properly with HTML tables. 
else 
{
    echo "no results";
}
 
$conn->close();

?>
