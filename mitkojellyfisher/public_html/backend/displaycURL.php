<?php
    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, 'https://www.portillojuan.com/endpoint.php'); // Replace with the URL you want to retrieve data from
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string

    // Execute cURL and store the response in a variable
    $response = curl_exec($ch);

    // Check for errors during the cURL request
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
    }
    
    // Close the cURL session
    curl_close($ch);
    
    if ($response !== false) {
        // Parse the JSON response
        $data = json_decode($response, true);
        
        if ($data !== null) {
            echo '<table class="custom-table" border="1" style="background: white">';
            echo '<h1> www.portillojuan.com </h1>';

            // Create the table header row with column names
            echo '<tr>';
            echo '<th>First Name</th>';
            echo '<th>Last Name</th>';
            echo '<th>Email</th>';
            echo '<th>Address</th>';
            echo '<th>Cell Phone</th>';
            echo '<th>Home Phone</th>';
            echo '</tr>';

            // Loop through the data and populate the table
            foreach ($data as $user) {
                echo '<tr>';
                echo '<td>' . $user['firstname'] . '</td>';
                echo '<td>' . $user['lastname'] . '</td>';
                echo '<td>' . $user['email'] . '</td>';
                echo '<td>' . $user['address'] . '</td>';
                echo '<td>' . $user['cellphone'] . '</td>';
                echo '<td>' . $user['homephone'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } 
        else {
            echo 'Failed to decode JSON data';
        }
    } 
    else {
        echo 'Failed to retrieve data';
    }
?>