<?php
    $email= $_POST['email'];
    $password=$_POST['password']

    //Database connection
    $conn=new mysqli('localhost','root','','signupforms');
    if($conn->connect_error){
        die('Connection Failed  :'$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(email,password)    values(?,?)");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        echo "Registration Successful...";

        $stmt->close();
        $conn->close();
    }