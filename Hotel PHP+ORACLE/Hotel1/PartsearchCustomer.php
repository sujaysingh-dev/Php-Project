<?php
include 'connect.php';
class customerdetail extends connect
{
	public function __construct()
	{
		parent::__construct();
	}//end of construct
	public function psearch()
	{
		if($this->db_found)
		{
			$field=$_POST["s"];
			$value=$_POST["t1"];
			$r=mysqli_query($this->db_found,"select * from customer where   $field='$value'");
			echo "<center>";
			echo" <h1>Particular Record Of Customer<h1>";
			echo "<table border=1 bgcolor=cyan>
				<tr>
					<th> Customer Identity </th>
					<th> First Name </th>
					<th> Last Name </th>
					<th> Address </th>
					<th> Suburb </th>
					<th> Post Code </th>
					<th> State </th>
					<th> Phone No </th>
					<th> Email Address </th>
				</tr>";
			while($db_field=mysqli_fetch_assoc($r))
			{
				echo"<tr>";
				echo "<td>".$db_field['customerid']."</td>";
				echo "<td>".$db_field['firstname']."</td>";
				echo "<td>".$db_field['lastname']."</td>";
				echo "<td>".$db_field['address']."</td>";
				echo "<td>".$db_field['suburb']."</td>";
				echo "<td>".$db_field['postcode']."</td>";
				echo "<td>".$db_field['state']."</td>";
				echo "<td>".$db_field['phoneno']."</td>";
				echo "<td>".$db_field['emailaddress']."</td>";
				echo"</tr>";
			}
			echo"</table>
			<style>
			*{
				margin-top: 10px;
				padding: 0px;
				box-sizing: border-box;
			}
			h1{
				color: black;
				font-size: 40px;
				text-shadow: 2px 2px solid red;
			}
		       table{
				border: 2px solid red;
				font-size: 25px;
				padding: 5px;
			}
		       th{
				font-size: 20px;
				font-weight: bold;
				padding: 5px;
				border: 2px solid black;
				padding-left: 25px;
				padding-right: 25px;
				background-color: palegreen;
		       }
		       td{
			padding: 1px;
			border: 2px solid black;
			padding-left: 25px;
			padding-right: 25px;
			background-color: palegreen;
			text-aling: center;
			font-size: 15px;
		}
		</style>
			";
			echo"<input type=button value='Print' onclick=window.print()>";
		}
	}
}//End of class
$ob=new customerdetail();
$ob->psearch();
?>