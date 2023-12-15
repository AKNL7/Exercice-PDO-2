<?php
require_once("./connexion.php");

include_once("./partials/header.php");

$request = $db->query('SELECT * FROM patients');

$patients=$request -> fetchAll(); {

 
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 



 <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Lastname</th>
      <th scope="col">Firstname</th>
      <th scope="col">Birthdate</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php
  foreach($patients as $row);

} ?>
      <th scope="row">1</th>
      <td><?php echo $row["lastname"] ?></td>
      <td><?php echo $row["firstname"] ?></td>
      <td><?php echo $row["birthdate"] ?></td>
      <td><?php echo $row["phone"] ?></td>
      <td><?php echo $row["mail"] ?></td>
    </tr>
  
     
  </tbody>
</table>



</body>
</html>
