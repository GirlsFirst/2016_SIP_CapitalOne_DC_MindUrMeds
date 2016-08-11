<!DOCTYPE html>
<html lang = "en">
<head>



		<title> MindUrMeds </title>
		<meta charset = "utf-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel = "stylesheet" href = "medpage2.css">
		<link rel = "stylesheet" href = "home.css">
 <script>
 function formClear() {
 var name = document.getElementById("name").value = "";
 var description = document.getElementById("description").value = "";
 var dose = document.getElementById("dose").value = "";
 var time = document.getElementById("time").value = "";
 }

 function addMedication() {
	 //values gotten from form
/* var name = document.getElementById("name").value;
 var description = document.getElementById("description").value;
 var dose = document.getElementById("dose").value;
 var time = document.getElementById("time").value;*/
 
 
	//translating the value into text for elements
 /*var name_t = document.createTextNode(name);
 var description_t = document.createTextNode(description);
 var dose_t = document.createTextNode(dose);
 var time_t = document.createTextNode(time);*/
 
 //create elements
 /*var checkbox = document.createElement('input');
checkbox.type = "checkbox";
checkbox.id = "check"*/
//checkbox.style.marginRight = "10px";
 /*var name_td = document.createElement("td");
 name_td.classList.add("col-md-3");
 var description_td = document.createElement("td");
 description_td.classList.add("col-md-3");
 var dose_td = document.createElement("td");
 dose_td.classList.add("col-md-3");
 var time_td = document.createElement("td");
 time_td.classList.add("col-md-3");
 
 var row = document.createElement("tr");
 row.classList.add("row");*/
 
 
 //add text to elements
 /*name_td.appendChild(checkbox);
 name_td.appendChild(name_t);
 description_td.appendChild(description_t);
 dose_td.appendChild(dose_t);
 time_td.appendChild(time_t);
 
 row.appendChild(name_td);
 row.appendChild(description_td);
 row.appendChild(dose_td);
 row.appendChild(time_td);

 document.getElementById("table").appendChild(row);*/
 document.forms["add"].submit();
 formClear();
 
 }
 
 function deleteRow() {
	var table = document.getElementById("table");
	var rowCount = table.rows.length;
	
	for (var i = 0; i<rowCount; i++) {
		var row = table.rows[i];
		var checkbox = row.cells[0].getElementsByTagName("input")[0];
		if ("checkbox" == checkbox.type && checkbox.checked) {
			table.deleteRow(i);
			i-=1;
			rowCount-=1;
		}
	}
 }
 
function deselectBox() {
	var table = document.getElementById("table");
	var rowCount = table.rows.length;
	
	for (var i = 0; i<rowCount; i++) {
		var row = table.rows[i];
		var checkbox = row.cells[0].getElementsByTagName("input")[0];
		if ("checkbox" == checkbox.type && checkbox.checked) {
			checkbox.checked = false;
		}
	}
 }
 
 </script>
</head>
<body>








<nav class="navbar navbar-default">
  <div class="container-fluid">
	<div class="navbar-header">
		<p class="navbar-brand">MindUrMeds</p>
	</div>
    <ul class="nav navbar-nav">
      <li><a href="home.html">Home</a></li>
      <li class="active"><a href="sqlinfo.html">My Meds</a></li>
      <li><a href="#"data-toggle = "tooltip" title = "Click to set alerts for your medicine.">Set Notifications</a></li> 
      <li><a href="#"data-toggle = "tooltip" title = "Click to send yor medications to your Doctor">Upload Meds</a></li> 
    </ul>
	
	<ul class="nav navbar-nav navbar-right">
       <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log-out</a></li>
    </ul>
	
  </div>
</nav>



<h1> <center> MindUrMeds </center> </h1>
<h3><center><?php echo "Information for: " . $first = $_POST['first']?></center></h3>
<div class="container">
	<div class="row">
	  <div class="col-md-3">Name</div>
	  <div class="col-md-3">Description</div>
	  <div class="col-md-3">Dose</div>
	  <div class="col-md-3">Time</div>
	  <table id="table" style = "width:100%">
		<?php
		include "dbconnect.php";
		
		$first = $_POST['first'];
		$last = $_POST['last'];
		
		$medication = sprintf("SELECT * FROM meds WHERE email = '%s' AND password = '%s'", $first, $last);
		
		$results = mysql_query($medication, $con);;
		
		$class = "col-md-3";
		$check = "checkbox";
		
			while ($row = mysql_fetch_assoc($results)) {
				echo "<tr>";
				echo "<td class =" . $class . "><input type = " . $check . " id=" . $check . ">" . $row['name'] . "</td>";
				echo "<td class =" . $class . ">" . $row['description'] . "</td>";
				echo "<td class =" . $class . ">" . $row['dose'] . "</td>";
				echo "<td class =" . $class . ">". $row['time'] . "</td>";
				echo "</tr>";
			}
		?>
	  </table>
	</div>
</div>

<!-- Trigger the modal with a button -->
<button id = "addButton" type="button" class="btn" data-toggle="modal" data-target="#add">Add</button>
<button id = "deleteButton" type = "button" class="btn" data-toggle="modal" data-target="#delete">Delete</button

<!-- Modal -->
<div id="add" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h2 class="text-center">New Medication</h2>
			</div>
			<div class="modal-body">
				<form id="add" name = "add" method = "POST" action ="enterdata.php" class = "form col-md-12 center-block" >
					<div class ="form-group">
						<input type = "text" class = "form-control input-lg" placeholder = "Prescription Name" id= "email" name = "email" value = <?php echo $_POST['first'] ?>> 
					</div>
					<div class ="form-group">
						<input type = "text" class = "form-control input-lg" placeholder = "Prescription Name" id= "password" name = "password" value = <?php echo $_POST['last'] ?>> 
					</div>
					<div class ="form-group">
						<input type = "text" class = "form-control input-lg" placeholder = "Prescription Name" id= "name" name = "name"/> 
					</div>
					<div class = "form-group">
						<input type = "text" class = "form-control input-lg" placeholder = "Description of Medication" id= "description" name = "description"/>
					</div>
					<div class = "form-group">
						<input type = "text" class = "form-control input-lg" placeholder = "Dosage" id= "dose" name = "dosage"/>
					</div>
					<div class = "form-group">
						<input type = "text" class = "form-control input-lg" placeholder = "Time of Medication" id= "time" name = "time"/>
					</div>
					<div class = "form-group">
						<button type = "submit" id = "enterButton" class="btn" data-dismiss="modal" aria-hidden="true" onclick= "addMedication()">Enter</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
			<!--<div class = "form-group">
				<div class="col-md-12">
					<button type = "submit" form ="add"  value = "Submit" id = "enterButton" class="btn" data-dismiss="modal" aria-hidden="true" onclick= "addMedication()">Enter</button>
				</div> 
			</div>-->
			</div>
		</div>
	</div>
</div>
<div id="delete" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h2 class="text-center">Delete?</h2>
			</div>
			<div class="modal-body">
				<p>Are you sure you want to delete your medication(s)?</p>
			</div>
			<div class="modal-footer">
				<div class="col-md-1">
					<button id ="yesButton" type = "button" class="btn" data-dismiss="modal" aria-hidden="true" onclick= "deleteRow()">Yes</button>
				</div>
				<div class="col-md-11">
					<button id = "noButton" type = "button" class="btn" data-dismiss="modal" aria-hidden="true" onclick= "deselectBox()">No</button>
				</div> 
			</div>
		</div>
	</div>
</div>
</body>
</html>