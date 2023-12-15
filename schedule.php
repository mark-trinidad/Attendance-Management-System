<?php
// schedule.php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the selected date
    $selectedDate = $_POST['selectedDate'];
    $Subject_ID = $_POST['Subject_ID'];
    // Validate and sanitize the date (adjust the validation based on your requirements)
    if (!empty($selectedDate)) {
        $formattedDate = date('d-m-Y', strtotime($selectedDate));

        echo $formattedDate;
        echo $Subject_ID;
       
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
            $sql="ALTER TABLE $Subject_ID ADD COLUMN `$formattedDate` VARCHAR(30);";
            $result = $conn->query($sql);
            header("Location: attendance_details.php?Subject_ID=" . $Subject_ID . "");

    } else {
        // Handle the case when the date is not selected
        echo "Please select a date.";
    }
}
?>
