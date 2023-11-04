<!DOCTYPE html>
<html>
<head>
<title>View Appointments | DMPD Dent.</title>

		<style>
		
			table {
				border-collapse: collapse;
				width: 100%;
				color: #588c7e;
				font-family: monospace;
				font-size: 25px;
				text-align: left;
			}
				th {
					background-color: #588c7e;
					color: white;
				}
			
		</style>
		
		 <!-- ccss file link  -->
   <link rel="stylesheet" href="css/style.css">
		
</head>

<body >
	<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="index.php" class="logo"><span>DMPD</span>Dental.</a>

         <nav class="nav" align="center">
            <a href="index.php">home</a>
            <a href="index.php">about</a>
            <a href="index.php">services</a>
            <a href="index.php">reviews</a>
            <a href="index.php">contact</a>
         </nav>

       
		 <div id="menu-btn" class="fas fa-bars"></div>
         
         </div>
  

      </div>

   </div>

</header>
	
  <table>
			<tr>
			<th>Id</th>
			<th>Patient Name</th>
			<th>Number</th>
			<th>Date & Time</th>
			</tr>
			
			<?php
			$conn = mysqli_connect("localhost", "root", "", "contact_db");
			
			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}
			$sql = "SELECT id, name, number, date  from contact_form";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
			echo "<tr>
			<td>" . $row["id"]. "</td>
			<td>" . $row["name"]. "</td>
			<td>" . $row["number"]. "</td>
			<td>" . $row["date"]. "</td>
			</tr>";
			}
			echo "</table>";
			} else { echo "0 results"; }
			$conn->close();
			?>
	</table>
  

	
	
</body>

</html>