<?
require_once('config.php');
?>
<?php

if(isset($_POST)) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = sha1($_POST['password']);

            $sql = "INSERT INTO users (firstname, lastname, email, password ) VALUES(?,?,?,?)";
            $stminsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$firstname, $lastname, $email, $password]);
            if($result) {
                echo'Successfully saved.';
            }else {
                echo 'There were errors while saving the data';
            }

        }else{
          echo 'No data';
}
