<?php 

try {
    $dsn= 'mysql:host=localhost;dbname=patients';

    $user = "root";

    $password = "";

    $db= new PDO  ($dsn, $user,$password);


}
 catch (Exception $message){
   echo "erreur";

}

?>