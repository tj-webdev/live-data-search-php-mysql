<?php
              
  $con = mysqli_connect("localhost","root","","test");

  $search = $_GET['search'];


  $query = "SELECT * FROM `data` WHERE name LIKE '%$search%'";

  // $query = "SELECT * FROM `data` WHERE name LIKE '%$search%' OR id LIKE '%$search%'";

  $result = mysqli_query($con,$query);

  if(mysqli_num_rows($result)==0){
    echo "<tr><td colspan='2'>No records found!</td></tr>";
    exit;
  }

  while($data = mysqli_fetch_assoc($result))
  {
    echo"<tr>
      <th>$data[id]</th>
      <td>$data[name]</td>
    </tr>";
  }

?>