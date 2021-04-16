<!DOCTYPE html>
<html>
<head>
	<title>TSF Bank</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  		<link rel="stylesheet" type="text/css" href="css/style.css">	
  		<style type="text/css">
  	 .th
      {
        text-align: center;
        font-size: 1.2em;
        font-weight: bold;
      }
      .tr
      {
        text-align: center;
        font-size: 1em;
        font-family: sans-serif;
        padding: 20px;
        font-weight: bold;

      } 
    </style>
</head>
<body>
	<?php
		include'navbar.php';
		error_reporting(0);
	?>
<div class="container">
<h2 class="text-center pt-4" style="font-family: sans-serif; font-weight: bold;">Transfer Money</h2>
 <br>
 <div class="table-responsive-sm">          
 <table class="table table-hover table-sm table-striped table-condensed table-bordered tb" >
    <thead>
      <tr class="info">
        <th class="th">Customer No</th>
        <th class="th">Name</th>
        <th class="th">Email</th>
        <th class="th">Balance</th>
      </tr>
    </thead>
   
    <tbody>
	<?php
		
		include 'config.php';
		$id = $_GET['id'];
    $sql = "SELECT * FROM `customer` Where id = $id";
   	$result = mysqli_query($conn,$sql);	
  ?>
   	<?php
    	while($row = mysqli_fetch_assoc($result))
     	{
     ?>
     		 <tr class="tr"> 
        			<td><?php echo $row['id']; ?></td>
        			<td><?php echo $row['name']; ?></td>
        			<td><?php echo $row['email']; ?></td>
        			<td><?php echo $row['balance']; ?></td>
      		</tr>
    <?php  		
       			 
    	}
    ?>
    
    </tbody>
  </table>
  </div>
  
 		<div>	<br>
			 <form class="form-horizontal"  method="post" action="simple.php"  style="margin-left:22%;">
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="tm">Transfer Money:</label>
			      <div class="col-sm-5">

			        <select class="form-control" name="to" id="to" required>
			        	<option value=""  disabled selected>Select Customer</option>
			        	<?php
			        			
                  include 'config.php';
                  $id = $_GET['id'];
    							$sql = "SELECT * FROM `customer` Where id!=$id";
   								$result = mysqli_query($conn,$sql);	

			        	?>
			        	<?php
			        	 while($row = mysqli_fetch_assoc($result))
     						{
    					?>
 			        		<option class="table" value="<?php echo $row['id'];?>">
 			        		<?php
 			        				echo $row['name']?>
			        		</option>
			        	<?php
			        		}
			        	?>	

			        </select>
			      </div>
			    </div>

           <input type="hidden" class="form-control" id="from" value="<?php echo($id)?>" name="from">

			    <div class="form-group">
			      <label class="control-label col-sm-2" for="amt" required>Enter Amount:</label>
			      <div class="col-sm-5">          
			            <input type="number" class="form-control" id="amt"  name="amt">
			      </div>
			    </div>
			    <div class="form-group">        
     			 <div class="col-sm-offset-2 col-sm-10">
        		<button class="btn btn-default" name="submit" type="submit"  style="font-weight: bold;">Transfer
        		</button></a>
     			 </div>
    			</div>
			 </form>
		</div>

</div>
<div class="absolute">        
  <footer class="text-center mt-5 py-2" style="margin-top:20%;"> 
        <p>&copy 2021 Made by <b>Mahesh Kshirsagar</b></p>
    </footer>
</div>

</body>
</html>

<?php  

  


?>