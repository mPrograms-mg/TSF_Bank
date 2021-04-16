    
<?php 

 include 'navbar.php';
 include 'config.php';

 if(isset($_POST['submit']))
 {

     $input = $_REQUEST;

     $sql    ='SELECT * FROM `customer` Where id = '. $input['from'];
     $result = mysqli_query($conn,$sql); 
     $sql1   = mysqli_fetch_array($result); 

     $sql    ='SELECT * FROM `customer` Where id = '.$input['to'];
     $query  = mysqli_query($conn,$sql);
     $sql2   = mysqli_fetch_array($query);


     if(($input['amt'])<0)
     {
        echo '<script type="text/javascript">';
        echo ' alert("Please Enter the Correct Value")
                window.location="customer.php"';
        echo '</script>';
     }

     else if (($input['amt'] > $sql1['balance'])) 
     {
        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance & Please Renter The Value")
                window.location="customer.php"'; 
        echo '</script>';
     }

      else if($input['amt'] == 0)
    {

         echo "<script type='text/javascript'>";
         echo "alert('Please Enter the Amount Number between 1 to 10 ')
                window.location='customer.php'";
         echo "</script>";
     }

     else
      {
               
                $update_bal= 0;
                $amount = 0;   

                $update_bal = $sql1['balance']- $input['amt'];
                $sql4 ="UPDATE `customer` SET `balance`= $update_bal WHERE id = ". $input['from'];
                mysqli_query($conn,$sql4);

                $update_bal = $sql2['balance'] + $input['amt'];
                $sql5 ="UPDATE `customer` SET `balance`= $update_bal WHERE id = ". $input['to'];
                mysqli_query($conn,$sql5);

                $sender = $sql1['name'];
                $receiver = $sql2['name'];

                $tranfer_amt = $input['amt'];
                $sql ="INSERT INTO `tranc_data`(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$tranfer_amt')";

                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful Your Money');
                                     window.location='history.php';
                           </script>";
                    
                }


        
     }

}


?>
  
