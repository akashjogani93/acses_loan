<?php
session_start();
include_once('../../connect.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepare the SQL queries
    $sql1 = "DELETE FROM `login` WHERE `uid` = ?";
    $sql2 = "DELETE FROM `user` WHERE `id` = ?";

    // Start a transaction for atomicity
    $conn->begin_transaction();

    try {
        // Prepare and execute the first DELETE statement
        $stmt1 = $conn->prepare($sql1);
        $stmt1->bind_param("i", $id);
        $stmt1->execute();
        $stmt1->close();

        // Prepare and execute the second DELETE statement
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bind_param("i", $id);
        $stmt2->execute();
        $stmt2->close();

        // If everything is successful, commit the transaction
        $conn->commit();
        echo json_encode(["code" => "200"]);
    } catch (Exception $e) {
        // If any query fails, rollback the transaction
        $conn->rollback();
        echo json_encode(["code" => "500", "error" => $e->getMessage()]);
    }
} else {
    echo json_encode(["code" => "500"]);
}

// Close the connection
$conn->close();
?>
