<!DOCTYPE html>
<html>
<?php  include('server.php'); ?>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title>Admin Dashboard</title>
</head>
<body>

<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>


<?php $results = mysqli_query($db, "SELECT First_Name, Last_Name, Email FROM guest"); ?>

<table>
	<thead>
		<tr>
			<th>First Name</th>
            <th>Last Name</th>
			<th>Email Address</th>
            
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['First_Name']; ?></td>
            <td><?php echo $row['Last_Name']; ?></td>
			<td><?php echo $row['Email']; ?></td>
			<td>
				<a href="server.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
</body>
</html>
