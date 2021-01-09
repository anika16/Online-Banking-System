<?php 
session_start();
$con=mysqli_connect('sql303.epizy.com','epiz_27646907','4E7UhzyJCChd','epiz_27646907_bank');
$name=$_POST['name'];
$q="select * from users where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['email'];
$amount=$row['amount'];
$_SESSION['name']=$name;

?>
<html>
<head>
	<title><?php echo $name?></title>
	
	<style>
		<?php include "button.css" ?>
             
		body {
			font-family: 'Caveat', cursive, sans-serif;
			margin: 10px;
			text-align:center;
			}

		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 5px;
			verflow: hidden;
			
			}

		.nav-li {
		  float:left;
              		}

		.nav-li a {
			
		  display: block;
		  color:#808080;
		  text-align: center;
                  font-size: 30px;
		  padding: 14px 16px;
		  text-decoration: none;
		  text-transform:uppercase;
		}

		
		table {
		font-family: arial, sans-serif;
                font-size:30px;
		border-collapse: collapse;
		width: 100%;
		}
		td, th {
		border: 1px solid #dddddd;
		text-align: center;
		padding: 30px;
		}
             th{
			color:black;
			font-size:30px;
			padding:30px;
		}
		
		td{
			font-size:30px;
			color: black;
			padding: 11px 16px 11px 18px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
		border: 1px solid #dddddd;
		text-align: center;
		padding: 30px;
		}
		body{
			background-color:#9DC88D;
			background-repeat: no-repeat;
			background-size:cover;
		}
		.flat-table-1 {
			background: transparent;
                        font-size: 30px;
		}
		
		.btn {
			background-color:Black;
			border: none;
			color: white;
			padding: 12px 16px;
			font-size: 30px;
			cursor: pointer;
			border-radius: 20px;
		}

		
	</style>
</head>
    <body>
	<ul class="nav-ul" style="height:53px;">
	
		<h2 style=" font-family:'Caveat', cursive; font-size: 55px;color:#380036; float: center;">User Details</h2>
	</a>
	</a>
	<br>
	</ul>
	<br><br><br><br><br>
    <div class="view">
       <table class="flat-table-1">

			<tr>
				<th>Name</th>
				<td><?php echo $name?></td>
			</tr>
           
           <tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th>Balance</th>
				<td><?php echo $amount?></td>
			</tr>


        </table>

        </div>
		<br>
        <br>
     <div class="buttons">
	<a href="transfer.php">
		<button class="glow-on-hover">TRANSFER MONEY</button>
	</a>
	<br>
	<br>
	<a href="index.php">
    <button class="glow-on-hover">HOME</button>
	</a>
	</div>
	<br>
	<br>

<img src="OIP.jfif";float:"center";height="2";width="2">
    </body>
</html>