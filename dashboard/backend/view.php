<?php
include_once('../../connect.php');
$response = array(); // Initialize an array for the response

if(isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepare and execute the SQL query
    $sql = "SELECT * FROM `loan` WHERE `id` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id); // Assuming 'id' is an integer, adjust accordingly if it's another type
    $stmt->execute();
    // Get the results
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        // Fetch the data into an associative array
        $row = $result->fetch_assoc();

        // Add fetched data to the response array
        $response['success'] = true;
        $response['data'] = $row;
    } else {
        $response['success'] = false;
        $response['message'] = 'No data found for the given ID.';
    }
} else {
    $response['success'] = false;
    $response['message'] = 'Invalid request. Please provide an ID.';
}

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
