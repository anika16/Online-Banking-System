<?php
session_start();
$con=mysqli_connect('sql303.epizy.com','epiz_27646907','4E7UhzyJCChd','epiz_27646907_bank');
$q="select *from mini_statement";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transaction</title>
	<style>
		<?php include "button.css" ?>
		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 5px;
			overflow: hidden;
			
			}

		.nav-li {
		  float:left;
		}

		.nav-li a {
			
		  display: block;
		  color:white;
		  text-align: center;
		  text-decoration: none;
		
		}
		body{
			background-color:#DFCFBE;
    		        background-repeat: no-repeat;
			background-size:cover;
			font-family: 'Caveat', cursive, sans-serif;
		}
		table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
		}
		td, th {
		border: 1px solid #dddddd;
		text-align: center;
		padding: 1px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
		border: 1px solid #dddddd;
		text-align: center;
		padding: 8px;
		}
		tr:hover{
			background-color:gray;
		}
		th,td{
			border-collapse:collapse;
			border:1px groove black;
		}
		h2{
			padding:2px;
			font-size:35px;
			color:#000000;

			text-align:center;
		}
		.btn {
			background-color:Black;
			border: none;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
			border-radius: 20px;
		}
		.buttons{
			
			right:42%;
			text-align:center;
		}
	</style>
	</head>
	<body>
		<ul class="nav-ul">
	<a href="index.php">

<h2 style=" font-family:'Caveat'sans-serif, cursive; font-size: 35px;color:#000000; float: center;">Transactions</h2>	

	</a>
	</ul>	
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>Receiver</th>
				<th>Amount</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["receiver"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<form action="index.php" method="post">
			<div class="buttons">
	<a href="index.php">
    <button class="glow-on-hover">BACK</button>
	</a>
		</form>
		
	</body>
</html>