<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('server.php');
$var='';
$connection = mysqli_connect("localhost", "root", "", "gpms");  
$query = "SELECT * FROM guest"; 
$query2 = "SELECT Excursion_name FROM excursions"; 
// Execute the query and store the result set 
$result = mysqli_query($connection, $query); 
if ($result) { 
 // it return number of rows in the table. 
  $row = mysqli_num_rows($result); 
  
}
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Guest</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               
               
                <?php   ?>
                          <h4>Total Guest Registered:<?php echo "$row";
   ?> </h4>
                        </div>
            </div>
            <div class="col-auto">
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <?php $results = mysqli_query($db, "SELECT Excursions_name FROM excursions"); ?>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
          <div class="list-group list-hover">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><h4>Top Trending Excursions</h4><?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
    <td><br>
  <a href="ex1.php" class="list-group-item list-group-item-action active"><?php echo $row['Excursions_name']; $var='Excursions_name';?></a></td>
  </tr>
  <tr>
    <td><br>
  <a href="function.php?myNumber=$var ?>" class="edit_btn" >View More</a>
	<?php } ?></tr></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">-----</div>
            </div>
            <div class="col-auto">
            
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example 
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-ce">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
-->
   

  <!-- Content Row -->








  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>