<?php
function corectez($sir) {
  $sir = trim($sir);
  $sir = stripslashes($sir);
  $sir = htmlspecialchars($sir);
  return $sir;
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Perform the deletion
    $cnx = mysqli_connect("localhost", "root", "", "clone"); // Update the database credentials as per your configuration
    if (mysqli_connect_errno()) {
        die("Conectare la MySQL nereusita: " . mysqli_connect_error());
    }
    mysqli_set_charset($cnx, "utf8");

    // Prepare and execute the delete query
    $deleteQuery = "DELETE FROM clones WHERE id = ?";
    $stmt = mysqli_prepare($cnx, $deleteQuery);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);

    // Check if the deletion was successful
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        // Redirect back to the add clone page
        mysqli_stmt_close($stmt);
        mysqli_close($cnx);  
        exit();
    } else {
        // Deletion failed
        mysqli_stmt_close($stmt);
        mysqli_close($cnx);
        echo "Failed to delete the clone.";
    }
} else {
    echo "Invalid request.";
}

?>