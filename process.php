<?php

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    //database connection 
    $conn = new mysqli('localhost' , 'root', '', 'test');
    if($conn -> connect_error){
        die('Connection Failed :' .$conn-> connect_error);

    }else{
        $stmt = $conn -> prepare("insert into registration (username, email, password)
        values (?,?,?)");
        $stmt-> bind_param("sss" , $username, $email, $password
    );
        $stmt->execute();
        echo 'registeration successful';
        $stmt-> close();
        $conn-> close();
    }
    
?>