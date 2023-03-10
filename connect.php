<?php
        $con = new mysqli("localhost", "root", "", "form") or die("Error Connection");

        if(isset($_POST['submit_btn'])){
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email  = $_POST['email'];
            $password = $_POST['password'];

            $sql = "INSERT INTO test values ('$firstName','$lastName','$email','$password')";
            $con -> query ($sql);
            header("location:index.html");
        }
?>

