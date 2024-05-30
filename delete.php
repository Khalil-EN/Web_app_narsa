<?php
include 'connection.php'; // Include the database configuration file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['user_id'])) {
        $user_id = $_POST['user_id'];

        // Validate and sanitize the input
        $user_id = filter_var($user_id, FILTER_VALIDATE_INT);

        if ($user_id === false) {
            die("Invalid user ID");
        }

        // Prepare the SQL delete statement
        $sql = "DELETE FROM users2 WHERE rfidtag = ?";
        $stmt = $con->prepare($sql);

        if ($stmt === false) {
            die("Error preparing the statement: " . $con->error);
        }

        // Bind the parameter to the statement
        $stmt->bind_param("i", $user_id);

        // Execute the statement
        if ($stmt->execute()) {
            //echo "User deleted successfully";
            header("Location: login.php");
            die;
        } else {
            echo "Error deleting user: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $con->close();
    } else {
        echo "User ID not provided";
    }
} else {
    echo "Invalid request method";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 mb-3">Delete Record</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger">
                            <p>Are you sure you want to delete this employee record?</p>
                            <p>
                                <label for="user_id">User ID:</label>
                                <input type="number" id="user_id" name="user_id" required>
                                <input  id="password" name="password" required>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="index.php" class="btn btn-secondary">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>