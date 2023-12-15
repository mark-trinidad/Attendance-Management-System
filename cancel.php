<?php
// cancel.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if Subject_ID and attendanceDate are set
    if (isset($_POST['Subject_ID']) && isset($_POST['attendanceDate'])) {
        $subjectID = $_POST['Subject_ID'];
        $attendanceDate = $_POST['attendanceDate'];

        // Database connection details
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

        // Construct SQL query to drop the column
        $sql = "ALTER TABLE $subjectID DROP COLUMN `$attendanceDate`";
        $result = $conn->query($sql);

        header("Location: attendance_details.php?Subject_ID=" . $subjectID . "");
        
        // Close the connection
        $conn->close();
    } else {
        echo "Subject_ID and attendanceDate are required.";
    }
} else {
    echo "Invalid request method.";
}
?>
