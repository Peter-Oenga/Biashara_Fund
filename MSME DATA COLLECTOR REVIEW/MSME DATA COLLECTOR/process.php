<?php
try {
    // Connect to the database
    $db = new PDO('mysql:host=localhost;dbname=biashara_fund', 'root', '');

    // Set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get the form data and perform basic validation (you can add more validation as needed)
    $surname = $_POST['surname'];
    $first_name = $_POST['first_name'];
    // Validate other fields here...

    // Prepare an SQL statement to insert the form data into the database
    $sql = 'INSERT INTO questionnaire_data (surname, first_name, other_name, identification_number, date_of_birth, gender, disability, disability_specification, area_of_residence, mobile_number, aware_of_fund, business_type, business_type_other, business_years) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
    
    $stmt = $db->prepare($sql);

    // Execute the SQL statement
    if ($stmt->execute([$surname, $first_name, $other_name, $identification_number, $date_of_birth, $gender, $disability, $disability_specification, $area_of_residence, $mobile_number, $aware_of_fund, $business_type, $business_type_other, $business_years])) {
        // Close the database connection
        $db = null;

        // Create a success response
        $response = array(
            'success' => true,
            'message' => 'Your response has been submitted successfully!'
        );
    } else {
        // If the SQL statement execution fails
        throw new Exception('Database error: Unable to insert data');
    }
} catch (PDOException $e) {
    // Handle any database errors
    $response = array(
        'success' => false,
        'message' => 'There was an error submitting your response. Please try again later.'
    );

    // Log the database error
    error_log('Database Error: ' . $e->getMessage());
} catch (Exception $e) {
    // Handle other exceptions
    $response = array(
        'success' => false,
        'message' => 'An error occurred. Please try again later.'
    );

    // Log the other exception
    error_log('Exception: ' . $e->getMessage());
}

// Return the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
