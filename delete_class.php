<html>
    <body>
    <?php
    session_start();
    if (isset($_SESSION["username"]) && $_SESSION["role"])
    {
        if (isset($_GET['Subject_ID'])) {
            // Retrieve the values
    
            $Subject_ID = $_GET['Subject_ID'];
            $servername = "localhost";
            $username_db = "zaid";
            $password_db = "1234";
            $dbname = "attendance";

            // Create connection
            $conn = new mysqli($servername, $username_db, $password_db, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
          

                $sql="DROP Table $Subject_ID ";
                $result = $conn->query($sql);

                $sql="DELETE from subjects where Subject_ID='$Subject_ID' ";
                $result = $conn->query($sql);

                
                header("Location: admin_classes.php");
                exit();
            }
        }    
    ?>
    </body>
</html>