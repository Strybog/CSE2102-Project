<link rel="stylesheet" type="text/css" href="style.css">
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
 include('server.php');
?>

<body>
<!-- Begin Page Content -->
<div class="container-fluid">

 

  <!-- Content Row -->
  <div class="row">

    <!-- 
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly) Card Example --><?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>


<?php $results = mysqli_query($db, "SELECT * FROM book INNER JOIN guest ON book.Guest_ID= guest.Guest_ID"); ?>

<table class="table table-hover">>
	<thead>
		<tr>
    <th>Guest ID</th>
			<th>First Name</th>
            <th>Last Name</th>
			<th>Check In</th>
            <th>Check out</th>
            <th>Room</th>
            
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
    <td><?php echo $row['Guest_ID']; ?></td>
			<td><?php echo $row['First_Name']; ?></td>
      <td><?php echo $row['Last_Name']; ?></td>
			<td><?php echo $row['Check_in']; ?></td>
      <td><?php echo $row['Check_out']; ?></td>
      <td><?php echo $row['Room_ID']; ?></td>
			<td>
				<a href="server.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
      <td>
				<a href="function.php?view=<?php echo $row['id']; ?>" class="edit_btn" >View</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table></div>
              <div class="h5 mb-0 font-weight-bold text-gray-1800">

               <h4></h4>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
   

    <!-- Earnings (Monthly) Card Example -->
    

   

  <!-- Content Row -->






</body>

  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>