<?php 	require_once('connect.php'); ?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="default2.css">
<title>Contract Extraction</title>
</head>

<body>
<div id="div_header">
			HR/Admin Activity Dashboard
		</div>
		<p></p>
<div class="center">
<?php	

			
		
		$query= "SELECT id FROM files";	
		$q2="SELECT ContractID FROM contract WHERE ContractStat ='Active'";
		$q3="SELECT ContractID FROM contract WHERE ContractStat ='Expire'";
		
	if	($result = $mysqli->query($query)){
		$count=$result->num_rows;
		echo "Total Contract: $count<br><br>";} 
	
	if	($result2 = $mysqli->query($q2)){
		$count2=$result2->num_rows;
		echo "#Contract In Alert Stage: $count2<br><br>";}
		
	if	($result3 = $mysqli->query($q3)){
		$count3=$result3->num_rows;
		echo "#Contract In Expired Stage: $count3<br>";}
	
	
	
	
?>
<Br>
	<p><a href="http://localhost/intern%20contract/downloads.php"> View or Download All Contract Here </a></p>
	<p><a href="http://localhost/intern%20contract/ContractExpired.php"> View All Expired Contract</a></p>
	<p><a href="http://localhost/intern%20contract/ContractAlert.php">View All Contract To Be Alerted</a></p>
	
	<p><a href="http://localhost/intern%20contract/Pdfgenerator/"> View All Full Contract Form Auto Generated By The System</a></p>
	<p><a href="http://localhost/intern%20contract/PdfShort/">View All Contract Extraction Form</a></p>
	
	
<Br>	
	<ul id="menu">
	
	<a href="http://localhost/intern%20contract/Generate_New_contract.html">  
       <input type="submit" value="Generate_New_Contract" >  
     </a>
	
	<a href="http://localhost/intern%20contract/Edit_the_old_contract.html">  
       <input type="submit" value="Edit_Old_Contract" >  
     </a>
	  </ul>	
</div>
</body>
</html>


