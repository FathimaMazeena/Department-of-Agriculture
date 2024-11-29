<?php
require_once 'databaseConnection.php';

$sql = "SELECT * FROM questions";
$result = mysqli_query($conn, $sql);

$questions = array();

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $questions[] = $row;
    }
}

mysqli_close($conn);

// Send the questions data as JSON
header('Content-Type: application/json');
echo json_encode($questions);
?>
