<?php
// Replace with your database credentials
session_start();
$servername = "localhost";
$username_db = "zaid";
$password_db = "1234";
$database = "attendance";

// Create a connection to the database
$conn = new mysqli($servername, $username_db, $password_db, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $role = $_POST["role"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $_SESSION["role"] = $role;
    $_SESSION["username"] = $username;
    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM users WHERE role = ? AND username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $role, $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $pass= $row["Password"];
    $ciphering="AES-128-CTR";
    $option=0;
    $decryption_iv="1234567890123456";
    $decryption_key="team5";

    $decryption= openssl_decrypt($pass, $ciphering, $decryption_iv, $option,$decryption_key);

    if ($result->num_rows > 0) {
        // User found, check the role and then verify the password
        
    
        if ($role == $row['Role']) {
            if($password===$decryption){
                // User authenticated, you can redirect or set a session here
                if ($role == 'admin') {
                    header("location: admin.php");
                    exit();
                } elseif ($role == 'teacher') {
                    header("location: teacher.php");
                } elseif ($role == 'student') {
                    header("location: student.php");
                }
            }
            else{
                echo"incorrect Password";
            }
        } else {
            // Invalid role
            echo "Invalid Credential. Please try again.";
        }
    } else {
        // Invalid credentials
        echo "Invalid credentials. Please try again.";
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>