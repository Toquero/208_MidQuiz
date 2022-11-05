<?php
    if(isset($_POST['submit'])){
        include './Include_DB/Connection_db.php';
        $userName = $_POST['username'];
        $email = $_POST['email'];
        $password = sha1($_POST['password']);
        $confirm_Password = sha1($_POST['confirm_Password']);
        if($password === $confirm_Password){
            var_dump($userName);
            $requete = $conn->prepare("INSERT INTO users(username, Email, Password)
             VALUES('$userName','$email','$password')");
            $requete->execute();
            header('location:Index.php');
        }
        else{
            header("location:Index.php?error=password not found");
        }
    }