<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'biashara_fund';

 
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $surname = $_POST['surname'];
    $first_name = $_POST['first_name'];
    $other_name = $_POST['other_name'];
    $identification_number = $_POST['identification_number'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $disability = $_POST['disability'];
    $disability_specification = $_POST['disability_specification'];
    $area_of_residence = $_POST['area_of_residence'];
    $mobile_number = $_POST['mobile_number'];
    $aware_of_fund = $_POST['aware_of_fund'];
    $business_type = $_POST['business_type'];
    $business_type_other = $_POST['business_type_other'];
    $business_years = $_POST['business_years'];
    $affirmative_fund_name = $_POST['affirmative_fund_name'];
    $affirmative_fund_application_successful = $_POST['affirmative_fund_application_successful'];
    $affirmative_fund_application_unsuccessful_reason = $_POST['affirmative_fund_application_unsuccessful_reason'];
    $barriers_to_taking_loan = $_POST['barriers_to_taking_loan'];
    $how_to_address_barriers = $_POST['how_to_address_barriers'];
    $actions_needed_from_fund = $_POST['actions_needed_from_fund'];
    $belongs_to_group = $_POST['belongs_to_group'];
    $group_name = $_POST['group_name'];
    $belongs_to_social_group = $_POST['belongs_to_social_group'];
    $social_group_name = $_POST['social_group_name'];
    // $coordinates = $_POST['coordinates'];

    $sql = "INSERT INTO `biashara_fund`(surname, first_name, other_name, identification_number, date_of_birth, gender, disability, disability_specification, area_of_residence, mobile_number, aware_of_fund, business_type, business_type_other, business_years, affirmative_fund_name, affirmative_fund_application_successful, affirmative_fund_application_unsuccessful_reason, barriers_to_taking_loan, how_to_address_barriers, actions_needed_from_fund, belongs_to_group, group_name, belongs_to_social_group, social_group_name)
            VALUES ('$surname', '$first_name', '$other_name', '$identification_number', '$date_of_birth', '$gender', '$disability', '$disability_specification', '$area_of_residence', '$mobile_number', '$aware_of_fund', '$business_type', '$business_type_other', '$business_years', '$affirmative_fund_name', '$affirmative_fund_application_successful', '$affirmative_fund_application_unsuccessful_reason', '$barriers_to_taking_loan', '$how_to_address_barriers', '$actions_needed_from_fund', '$belongs_to_group', '$group_name', '$belongs_to_social_group', '$social_group_name')";

    if ($conn->query($sql) === TRUE) {
        $response["success"] = true;
    } else {
        $response["success"] = false;
        $response["message"] = "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    echo json_encode($response);
} else {
    $response["success"] = false;
    $response["message"] = "Invalid request";

    header('Content-Type: application/json');
    
    echo json_encode($response);
}
?>