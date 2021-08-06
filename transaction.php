<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <style>
      body
      {
          background-image:url('images/transaction.jpeg');
      }    
    </style>
</head>
<body>
<?php
 include'navbar.php';
?> 
<?php include'config.php';
$sql="SELECT * FROM transaction";
 $result=$conn->query($sql);
 ?>
 <table>
     <tr>
         <th>S.NO</th>
         <th>Sender's Name</th>
         <th>Receiver's Name</th>
         <th>Amount</th>
         <th>Date</th>
     </tr>
<?php
 if($result->num_rows>0)
 {
    while($row=$result->fetch_assoc())
    {
?>
<tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['sender']?></td>
    <td><?php echo $row['receiver']?></td>
    <td><?php echo $row['amount']?></td>
    <td><?php echo $row['date']?></td>
</tr>
 <?php
      }
?>
</table>
 <?php 
 }
  ?>

   
</body>
</html>
