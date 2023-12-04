<?php
session_start();
session_destroy();
    include '../includes/dbconnection.php';
?>
<style>
.checkmark__circle {
  stroke-dasharray: 166;
  stroke-dashoffset: 166;
  stroke-width: 2;
  stroke-miterlimit: 10;
  stroke: #7ac142;
  fill: none;
  animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
}

.checkmark {
  width: 56px;
  height: 56px;
  border-radius: 50%;
  display: block;
  stroke-width: 2;
  stroke: #fff;
  stroke-miterlimit: 10;
  margin: 10% auto;
  box-shadow: inset 0px 0px 0px #7ac142;
  animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
}

.checkmark__check {
  transform-origin: 50% 50%;
  stroke-dasharray: 48;
  stroke-dashoffset: 48;
  animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
}

@keyframes stroke {
  100% {
    stroke-dashoffset: 0;
  }
}
@keyframes scale {
  0%, 100% {
    transform: none;
  }
  50% {
    transform: scale3d(1.1, 1.1, 1);
  }
}
@keyframes fill {
  100% {
    box-shadow: inset 0px 0px 0px 30px #7ac142;
  }
}
</style>  
<?php

$AptNumber=$_GET['AptNumber'];
 $query="update tblappointment set payment_status='Partial Payment' where AptNumber='$AptNumber'";
    mysqli_query($con,$query);
     // if(!empty($invoice)){
     //    $que ="SELECT invoice_no=$invoice AS invoice_no FROM customer_order GROUP BY invoice_no";
     //    $run = mysqli_query($con,$que);
     //    if($run){
     //    $que = mysqli_query($con, "UPDATE customer_order SET paymentMethod='Payment Successfull' WHERE invoice_no=$invoice");
        
?>  
<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
  <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
  <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
</svg>

   <center> <h3>Your Transaction has been Successfully Completed</h3></center>
      
   <?php  
 // } else{
   //  echo "hiiii";
   // }
//}

   ?>    
    
