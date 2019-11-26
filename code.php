<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>

<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
include('server.php');

$gid = 5;
$ais = 'pending';
?>
 
   <?php 
    $sql ="select * FROM guestp WHERE GUEST_id = $gid AND approval_status ='pending' ;"; 
   if (($gid == 5) && ($ais == 'pending')){
    echo "Working";



   }
   
   else {
     echo "not working";






     

     

   }
   
   ?>








    
  
  <?php echo " ". "<br>"; ?>   
    <?php $sql ="select * FROM guest WHERE GUEST_id = $gid;"; ?>
    <?php $result = mysqli_query($db, $sql); ?>
    <?php $resultCheck = mysqli_num_rows($result); ?>
 
<table>
<form action="Gsignup.php" method="POST">
 <div class="modal-body">

 
<div class="form-group">
    <label></label>
    <input type="hidden" name="guest_id" class="form-control" placeholder="Enter Guest ID">
</div>

<?php $results = mysqli_query($db, "SELECT Guest_ID,Room_Type,Days_reserved,check_in_Date,Excursion_ID,Excursion_Day,Dietary_needs,Special_Needs_ID,Transport_Type,Approval_Status FROM guestp"); ?>
   
            
               

                
        
        
        <h4>Guest  Information</h4>
        <th>Room_Type</th>
        <th>Days_Reserved</th>
        <th>check_in_Date</th>
        <th>Excursion_ID</th>
        <th>Excursion_Day</th>
        <th>Dietary_needs</th>
        <th>Special_Needs_ID</th>
        <th>Transport_Type</th>
        <th>Aproval_Status</th>
        




        
        <tr>
        <?php while (( $row['Guest_ID'] = $gid ) && ($row = mysqli_fetch_array($results)))  { ?>
        <td><?php echo $row['Room_Type']; ?></td>
        <td><?php echo $row['Days_reserved']; ?></td>
        <td><?php echo $row['check_in_Date']; ?></td>
        <td><?php echo $row['Excursion_ID']; ?></td>
        <td><?php echo $row['Excursion_Day']; ?></td>
        <td><?php echo $row['Dietary_needs']; ?></td>
        <td><?php echo $row['Special_Needs_ID']; ?></td>
        <td><?php echo $row['Transport_Type']; ?></td>
        <td><?php echo $row['Approval_Status']; ?></td>
        
        </tr>
             
           
  
          </table>
  
    
  
    <?php 




} ?>
<table>
<form action="Gsignup.php" method="POST">
 <div class="modal-body">

 
<div class="form-group">
    <label></label>
    <input type="hidden" name="guest_id" class="form-control" placeholder="Enter Guest ID">
</div>

<?php $results = mysqli_query($db, "SELECT Excursions_name,Excursions_id,Excursions_occurance FROM excursions"); ?>
   
            
               

                
        
        
        <h4>Excursions</h4>
        <th>Name Of Excursions</th>
        <th>Excursions_occurance</th>
        <th>ID</th>
        
        <tr>
        <?php while (( $row['Excursions_id'] < 16) && ($row = mysqli_fetch_array($results)))  { ?>
        <td><?php echo $row['Excursions_name']; ?></td>
        <td><?php echo $row['Excursions_occurance']; ?></td>
        <td><?php echo $row['Excursions_id']; ?></td>
        </tr>
             
           
  
  
  
    
  
    <?php 




} ?>

</table>


<table>
<form action="Gsignup.php" method="POST">
 <div class="modal-body">

 
<div class="form-group">
    <label></label>
    <input type="hidden" name="guest_id" class="form-control" placeholder="Enter Guest ID">
</div>

<?php $results = mysqli_query($db, "SELECT Special_ID,Special_requirements FROM special_needs"); ?>
   
            
               

                
        
        
        <h4>Special Requirements</h4>
        <th>Name Of Special Requirements</th>
        <th>ID</th>
        <tr>
        <?php while (( $row['Special_ID'] < 16) && ($row = mysqli_fetch_array($results)))  { ?>
        <td><?php echo $row['Special_requirements']; ?></td>
        <td><?php echo $row['Special_ID']; ?></td>
        </tr>
             
           
  
  
  
    
  
    <?php 




} ?>

</table>


<table>
<form action="Gsignup.php" method="POST">
 <div class="modal-body">

 
<div class="form-group">
    <label></label>
    <input type="hidden" name="guest_id" class="form-control" placeholder="Enter Guest ID">
</div>

<?php $results = mysqli_query($db, "SELECT dietary_ID,Dietary_preference FROM dietary_requirements"); ?>
   
            
               

                
        
        
        <h4>Dietary preference</h4>
        <th>Name Of Dietary Preference</th>
        <th>ID</th>
        <tr>
        <?php while (( $row['dietary_ID'] < 16) && ($row = mysqli_fetch_array($results)))  { ?>
        <td><?php echo $row['Dietary_preference']; ?></td>
        <td><?php echo $row['dietary_ID']; ?></td>
        </tr>
             
           
  
  
  
    
  
    <?php 




} ?>

</table><br>


<table>
<h4>Room Descriptions</h4>
  <tr>
    <th>Room Type</th>
    <th>Room Range</th>
  </tr>
  <tr>
    <td>Standard</td>
    <td>1 to 20</td>
    
  </tr>
  <tr>
    <td>Pool View</td>
    <td>21 to 25</td>
    
  </tr>

</table><br>




























<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
</form>
</div>





























<br>


<div class="modal-footer">

</div>
</div>
</html>

