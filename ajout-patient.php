<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
    <form action="./process/traitement-ajout-patient.php" method="post">

      <!-- input NOM -->
      <label for="lastname">Nom</label>
      <input type="text" id="lastname" name="lastname">

      <!-- input PRENOM -->
      <label for="firstname">Prenom</label>
      <input type="text" id="firstname" name="firstname">

      <label for="birthdate">Date de naissance</label>
      <input type="date" id="birthdate" name="birthdate">

      <label for="phone">Numéro de Téléphone</label>
      <input type="tel" id="phone" name="phone">

      <label for="mail">Email</label>
      <input type="email" id="mail" name="mail">

      <button type="submit">Ajouter Patient</button>


    </form>  



</body>

</html>