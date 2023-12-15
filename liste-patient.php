<?php
require_once("./connexion.php");

include_once("./partials/header.php");

$request = $db->query('SELECT * FROM patients');

$patients = $request->fetchAll()

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
                <th scope="col">Actions</th>

            </tr>
        </thead>
        <tbody>

            <?php foreach ($patients as $patient) { ?>
                <tr>
                    <th scope="row"><?php echo $patient["id"] ?></th>
                    <td><?php echo $patient["lastname"] ?></td>
                    <td><?php echo $patient["firstname"] ?></td>
                    <td>bouton en voir plus</td>
                </tr>

            <?php } ?>



        </tbody>
    </table>



</body>

</html>