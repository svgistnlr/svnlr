<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ecart Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  	
  </script>
  <style>
  		.box{
			width:180px;
			height:250px;
			margin-right:30px;
			margin-top:30px;
			border:solid silver 1px;			
		}
		.price{
			font-size:22px;
			color:#000099;
		}
		li{
			color:#990000;
			margin-left:30px;
		}
  </style>
  
</head>

<body>
<a href="home.html"><p align="left"><input type="button" value="Back"/></p></a>
<a href='#'><p align="right">24X7 Customer Care</p></a>
<a href='#'><p align="right">Track Order</p></a>
<div class="container">
  <?php
  	mysql_connect("localhost","root","");
	mysql_select_db("cart");
	$query=mysql_query("SELECT *FROM mobiles");	
	$count=1;
	$temp=4;
	echo "<table class='table'>";
	echo "<tbody>";
	echo "<tr>";
	echo "<form method='post' action='index.php' name='myform'>";
	while($row=mysql_fetch_array($query))
	{		
		$name=$row['name'];
		if($count==($temp))
		{
			echo "</tr><tr>";
			$temp=$temp+3;
		}
		echo "<td>";
		echo "<div id='$count' class='box' align='center'><h3>";
		echo "<span style='color:#FF0099'>".$row['brand']."</h3></span>"."<span style='color:#0000FF' class='text-capitalize'>".$row['name']."</span>";
		echo "<br/><br/>";
		echo "<span class='bullets' align='left'>";
		echo "<li>".$row['inches']." inches"."</li>";
		echo "<li>".$row['internal_memory']."gb"."</li>";
		echo "<li>".$row['os']."</li><br/></span>";		
		echo "<span class='price'>Rs.".$row['cost']."/-</span>";
		echo "<br/><input type='checkbox' value='$name'/> Add to Compare";
		echo "</div>";
		echo "</td>";		
		$count++;		
	}
	echo "</tr></tbody>	";
	echo "</table>";
	echo "</form>";
	function arrays()
	{
		
	}
  ?>  
  </div>
</body>
</html>
