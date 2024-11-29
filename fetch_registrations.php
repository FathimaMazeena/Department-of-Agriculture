<?php
require_once 'databaseConnection.php';

$sql = "SELECT first_name, last_name, email, contact_number, service FROM registrations_for_services";
$result = mysqli_query($conn, $sql);

$data = array();

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = array(
            $row['first_name'],
            $row['last_name'],
            $row['email'],
            $row['contact_number'],
            $row['service']
        );
    }
}

mysqli_close($conn);

header('Content-Type: application/json');
echo json_encode($data);
?>
