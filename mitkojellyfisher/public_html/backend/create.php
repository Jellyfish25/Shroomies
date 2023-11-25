<?php
    $query = "INSERT INTO user (firstName, lastName, email, homeAddress, homePhone, cellPhone) VALUES (?, ?, ?, ?, ?, ?)";

    if($_POST['firstName'] == "" || $_POST['lastName'] == "" || $_POST['Email'] == "" || $_POST['homeAddress'] == "" || $_POST['homePhone'] == "" || $_POST['cellPhone'] == "") {
        echo '<script> document.getElementById("errorCreateMessage").style.display = "block"; </script>';
    }
    else {
        $stmt = mysqli_prepare($connection, $query);
        if($stmt) {
        mysqli_stmt_bind_param($stmt, "ssssss", $_POST['firstName'], $_POST['lastName'], $_POST['Email'], $_POST['homeAddress'], $_POST['homePhone'], $_POST['cellPhone']);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        }
        echo '<script> document.getElementById("successMessage").style.display = "block"; </script>';
    }
?>