<?php
session_start();
$con=mysqli_connect('sql303.epizy.com','epiz_27646907','4E7UhzyJCChd','epiz_27646907_bank');
$name1=$_SESSION['name'];
$q="select name from users where not name='$name1'";
$result=mysqli_query($con,$q);
?>


<html>
<head>
   <title>Transfer</title>
	<style>
		<?php include "button.css" ?>
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
		  color:#000000;
		  text-align: center;
		  padding: 2px 2px;
		  text-decoration: none;
		  text-transform:uppercase;
		}
		body{
			background-image:url("Money_Transfer.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
		.form{
			text-align:center;
			
		}
		.button{
			text-align:center;
		}
		button{
			border-radius:10px;
			background-color:transparent;
		}
		button:hover{
			background-color:white;
                        border:2px ridge black;
			color:#808080;
		}
		table{
			background-color:transparent;
			padding:50px;
			border:2px ridge black;
			border-radius: 20px;
		}
		.btn {
			background-color:#808080;
			border: black;
			color: #808080;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}

		.btn:hover {
			background-color:#808080;
			color:#808080;
		}
	</style>
</head>
<body>
	
	<center>
		<div class="view">
			<br><br>
			<form action="check_transfer.php" method="post" >
				<div class="border">
				<table>
					<tr>
						<td style="font-size:15pt;color:black;">
							<label for="sender" align="left">Receiver Name :</label>
							&nbsp; <select name="receiver" style="font-size: 12pt; height: 28px; width:290px;">
           <?php while($row = $result->fetch_assoc()) { ?>
			<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
			<?php } ?>
			</td>
		</tr><br>
		<tr>
			<td style="font-size:15pt;color:black;">
			<br><label for="transfer">Amount :</label> 
			 &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<input type="number" name="transfer" style="font-size: 12pt; height: 28px; width:290px;" required></td>
		</tr>
       <tr>
			<td>
				<div class="button">
				<br><button type="submit" class="c" onMouseOver="this.style.color='black' "onMouseOut="this.style.color='black'" value="Credit" style="color:black;background-color: transparent;font-size:18px;height:40px; width:100px; border-radius: 30px; cursor:pointer; border: 2px solid black;margin-left: -80px; margin-top: 20px;">Transfer</button>
				</div>
		   </td>
        </tr>
       </table>
	   </div>
      </form>
    </div><br>
	<form action="user.php" method="post">
			<div>
				<button class="glow-on-hover" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button><br><br>
				
			</div>

	</form>
	<div class="buttons">
			<a href="index.php">
    			<button class="glow-on-hover">HOME</button>
			</a>
	</div>
</center>
</body>
</html>