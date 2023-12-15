<html>
    <body>
    <?php
    session_start();
    if (isset($_SESSION["username"]) && $_SESSION["role"])
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve the values
    
           $Student_ID = $_POST['name'];
            $Subject_ID = $_POST['Subject_ID'];
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
          

                $sql="INSERT INTO $Subject_ID(Student_ID, Full_Name) VALUES ('$Student_ID',(SELECT Full_Name from students WHERE Student_ID='$Student_ID'))";
                $result = $conn->query($sql);
                
                header("Location: update_class.php?Subject_ID=".$Subject_ID."");
                exit();
            }
        }    
    ?>
    </body>
</html>