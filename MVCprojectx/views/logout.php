<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    } elseif (empty($pass)) {
        header("Location: index.php?error=Password is required");
        exit();
    } else {
        // Prepare the query with placeholders
        $sql = "SELECT * FROM users WHERE user_name=?";

        // Create a prepared statement
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            // Handle the error if needed
            header("Location: index.php?error=Database error");
            exit();
        } else {
            // Bind the parameter to the placeholder
            mysqli_stmt_bind_param($stmt, "s", $uname);

            // Execute the prepared statement
            mysqli_stmt_execute($stmt);

            // Get the result
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                // Verify the password
                if (password_verify($pass, $row['password'])) {
                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: home.php");
                    exit();
                } else {
                    header("Location: index.php?error=Incorrect User name or password");
                    exit();
                }
            } else {
                header("Location: index.php?error=Incorrect User name or password");
                exit();
            }
        }
    }
} else {
    header("Location: index.php");
    exit();
}
?>
