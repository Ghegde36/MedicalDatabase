<?php 
include "connection.php";

?>

<html>
	<head>
		<title>
			Records
		</title>
		<link rel="stylesheet" type="text/css" href="Dataout.css">
	</head>
	<body style="background-color:#549bd9">
		<div class="container1">
		<h1>The Patient Details are:<h1>
		<div class="incontainer">
		<?php
			$adno=$_POST['pano'];
			$query="select * FROM patient where Pa_no='$adno'";
			$result=mysqli_query($conn,$query);
			if($result->num_rows > 0)
			{
				while($row=$result->fetch_assoc())
				{
					echo "<ul>
						  <li>Patient name is: {$row['Pname']}</li>
						  <li>Phone no is: {$row['Phone_no']}</li>
						  <li>Blood Group is:  {$row['Blood_group']}</li>
						  <li>Sex is:  {$row['Sex']}</li>
						  <li>Date Of Birth: {$row['Dob']}</li>
						  <li>Adress is:  {$row['Adress']}</li></ul>";
				}
			}
		?>
		</div>
		</div>
		<form action="welcome.php">
			<input type="submit" value="Go Back" class="form1">
		</form>
		
		
		<div class="containertable">
		<h1>Medications used by patient are: <h1>
		<?php
			$query="select * FROM medication where Pa_no='$adno'";
			$result=mysqli_query($conn,$query);
		?>
		<table border="2" class="incontainer">
			<thead>
					<tr>
						<th>Medication Detalis</th>
						<th>Dosage</th>
					</tr>
			</thead>
		<?php
			if($result->num_rows > 0)
			{
				while($row=$result->fetch_assoc())
				{
					echo "<tbody>
							<tr>
							<td>{$row['Details']}</td>
							<td>{$row['Dosage']}</td>
							</tr>
							</tbody>";
				}
				
			}
		?>
		</table>
		</div>
		
		<div class="containertable">
		<h1>The privious records of the patient are:<h1>
		<?php
			$query="select * FROM records where Pa_no='$adno'";
			$result=mysqli_query($conn,$query);
		?>
			<table border="2" class="incontainer">
			<thead>
					<tr>
						<th>Details</th>
						<th>Date</th>
						<th>Remarks</th>
					</tr>
			</thead>
			<?php
			if($result->num_rows > 0)
			{
				
				while($row=$result->fetch_assoc())
				{
					echo "<tbody>
							<tr>
							<td>{$row['Details']}</td>
							<td>{$row['Date']}</td>
							<td>{$row['Remarks']}</td>
							</tr>
							</tbody>";
				}
				
			}
		?>
		</table>
		</div>
		<div class="containertable">
		<h1>The allergies of the patient are:</h1>
		<?php
			$query="select * FROM allergies where Pa_no='$adno'";
			$result=mysqli_query($conn,$query);
		?>
		<table border="2" class="incontainer">
			<thead>
					<tr>
						<th>Allergy</th>
						<th>Allergen</th>
					</tr>
			</thead>
			<?php
			if($result->num_rows > 0)
			{
				
				while($row=$result->fetch_assoc())
				{
					echo "<tbody>
							<tr>
							<td>{$row['Allergy']}</td>
							<td>{$row['Allergen']}</td>
							</tr>
							</tbody>";
				}
				
			}
		?>
		</table>
		</div>
		
	</body>
</html>