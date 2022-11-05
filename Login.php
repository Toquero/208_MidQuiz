<?php
session_start();
if (isset($_POST['submit'])) {
    include './Include_DB/Connection_db.php';
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $requete = "SELECT * FROM users WHERE Email = '$email' AND Password = '$password'";

    $statment = $conn->query($requete);
    // $statment->execute();
    // $result = $statment->fetch();

    if ($statment->num_rows > 0) {
        while ($row = $statment->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
            if ($row["Email"] == $email && $row["Password"] == $password) {
                $_SESSION['name'] = $result['username'];
                $_SESSION['email'] = $result['Email'];
                $_SESSION['password'] = $result['Password'];
                if (isset($_POST['check'])) {
                    setcookie('email', $_SESSION['email'], time() + 3600);
                    setcookie('password', $_SESSION['password'], time() + 3600);
                }
            }
        }
        header("location:./AdminDash.php");
    } else if (empty($email) && empty($password)) {
        header("location:Index.php?error=please enter your email or password");
    } else {
        header("location:Index.php?error=email or password not found");
    }
}