<?php
// session_start();
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     // Database connection here
//     $con = new mysqli("localhost", "root", "", "test"); // Replace with your actual database credentials
//     if ($con->connect_error) {
//         die("Failed to connect: " . $con->connect_error);
//     }

//     // Use prepared statement to prevent SQL injection
//     $stmt = $con->prepare("SELECT * FROM registration WHERE email = ?");
//     $stmt->bind_param("s", $email);
//     $stmt->execute();
//     $stmt_result = $stmt->get_result();

//     if ($stmt_result->num_rows > 0) {
//         $data = $stmt_result->fetch_assoc();

//         // Verify the password using password_verify
//         if (password_verify($password, $data['password'])) {
//             session_start(); // Start the session
//             $_SESSION['username'] = $data['username']; // Change 'user_id' to your actual user identifier column
//             $_SESSION['email'] = $data['email'];
//             $_SESSION["loggedin"] = true; // Set a session variable to indicate the user is logged in
            
//             // Redirect to your dashboard or desired page
//             header("Location: home.html");
//             exit();
//         } else {
//             // For debugging, you can print the hashed password from the database
//             echo "<h2>Invalid Password!</h2>";
//             echo "Hashed Password from DB: " . $data['password'];
//         }
//     } else {
//         echo "<h2>Invalid Email</h2>";
//     }

//     // Close the database connection
//     $stmt->close();
//     $con->close();
// }
session_start();
include "db_conn.php";
if (isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
        $email = validate($_POST['email']);
        $pass = validate($_POST['password']);
        if (empty($email)) {
            header("Location: form.php?error=Email is required");
            exit();
        } elseif(empty($pass)){
            header("Location: form.php?error=User password is required");
            exit();
        } else {
            $sql = "SELECT * FROM registration WHERE email = '$email' AND password = '$pass'";
             $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if ($row['email'] === $email && $row ['password'] === $pass){
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION["loggedin"] = true;
                    header("Location: home.html");
                    die();

                }
                else {
                    header("Location : form.php?error=Incorrect Email or Password");
                    exit();
                }
            
        }
    }  
    }else{
        header("Location: form.php?error=Incorrect Email or Password");
        exit();
    }


echo "HEllo";
?>
