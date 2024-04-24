<?php
include('connect.php');


if (isset($_POST['id']) && isset($_POST['Binsend']) && isset($_POST['Binweightsend'])) {
    $id = $_POST['id'];
    $Binsend = $_POST['Binsend'];
    $Binweightsend = $_POST['Binweightsend'];

    // Create a prepared statement
    $sql = "UPDATE admin_option SET Bin_Size = ?, Empty_Bin_Weight = ? WHERE id = ?";
    $stmt = mysqli_prepare($con, $sql);

    if ($stmt) {
        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "ssi", $Binsend, $Binweightsend, $id);

        // Execute the prepared statement
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo 'Data updated successfully';
        } else {
            echo 'Failed to update data';
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo 'Failed to prepare statement';
    }
} else {
    echo 'No ID provided for updating';
}

?>
