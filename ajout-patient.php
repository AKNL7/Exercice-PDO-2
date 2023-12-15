<?php 
include_once("./partials/header.php");


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

<form action="./process/traitement-ajout-patient.php" method="post" class="d-flex justify-content-center mt-3 mb-3 p-2 g-col-6 p-2 border border-dark bg-primary-emphasis">


    

    <ul>
    <li>
    <label for=" lastname" class="p-2 g-col-5">Nom</label>
<input type="text" id="lastname" name="lastname">
    </li>
    
    
    <li>
    <label for="firstname" class="p-2 g-col-5">Prenom</label>
<input type="text" id="firstname" name="firstname">
    </li>
    
    <li>
      <label for="birthdate" class="p-2 g-col-5">Date de naissance</label>
      <input type="date" id="birthdate" name="birthdate">
          </li>
     

    <li>
      <label for="phone" class="p-2 g-col-5">Numéro de Téléphone</label>
      <input type="tel" id="phone" name="phone">
    </li>
    
    
         <li>
           <label for="mail" class="p-2 g-col-5">Email</label>
            <input type="email" id="mail" name="mail">
               </li>
     
  </ul>

  <div class="d-flex align-items-end">
  <button type="submit">Ajouter Patient</button>   
</div>
</form>

   
      
      
      
      
      
      



</body>

</html>