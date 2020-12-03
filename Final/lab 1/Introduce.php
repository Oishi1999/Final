<?php
   $username="root";
   $servername="localhost";
   $Password="";
   $db_name="oishi fall 20-21";
   
   $conn= mysqli_connect($servername,$username,$Password,$db_name);
   //var_dump($conn);
  
   if (!$conn){
	   die("connection_failed: ". mysqli_connect_error());
	   
	   }
	   
	   
	  // mysqli_query($conn,"Insert Into Users Value(null,'mahia','12345','user')");
      $query = "SELECT * FROM users";
      $results = mysqli_query($conn,$query);
	 if (mysqli_num_rows($results) > 0){
		 echo "<table border='1' style='border-collapse:collapse;'>";
		  echo "<tr>";
		   echo "<th> username</td>";
		    echo "<th> Password</td>";
			 echo "<th> usertype</td>";
			  echo "</tr>";
		 
		 
		 while($row = mysqli_fetch_assoc($results)){
			 echo "<tr>";
			 echo "<td> " . $row["username"]. "</td>";
			  echo "<td> " . $row["Password"]. "</td>";
			   echo "<td> " . $row["usertype"]. "</td>";
			   echo "</tr>";
		 }
		 echo "</table>";
		 
	 }

?>