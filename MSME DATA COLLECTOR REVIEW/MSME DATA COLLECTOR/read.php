<!DOCTYPE html>
<html>
<head>
    <title>Display Database Records</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">  
</head>
<body>
    <div class="container">
        <h1>Database Records</h1>
        <button id="exportCSV" class="btn btn-primary">Export to CSV</button>
        <span><button id="exportJSON" class="btn btn-info">Export to JSON</button></span>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th class="thead-dark bg-light">#</th>
                    <th class="thead-dark bg-light">Surname</th>
                    <th class="thead-dark bg-light">First Name</th>
                    <th class="thead-dark bg-light">Other Name</th>
                    <th class="thead-dark bg-light">ID No.</th>
                    <th class="thead-dark bg-light">D.O.B</th>
                    <th class="thead-dark bg-light">Gender</th>
                    <th class="thead-dark bg-light">Disability</th>
                    <th class="thead-dark bg-light">Disability_specification</th>
                    <th class="thead-dark bg-light">Area of residence</th>
                    <th class="thead-dark bg-light">Mobile No.</th>
                    <th class="thead-dark bg-light">Aware_fund</th>
                    <th class="thead-dark bg-light">Business_Type</th>
                    <th class="thead-dark bg-light">Business_Type_Other</th>
                    <th class="thead-dark bg-light">Business_Years</th>
                    <th class="thead-dark bg-light">affirmative_fund_application_successful</th>
                    <th class="thead-dark bg-light">affirmative_fund_application_unsuccessful</th>
                    <th class="thead-dark bg-light">affirmative_fund_application_unsuccessful_reason</th>
                    <th class="thead-dark bg-light">Loan Barriers</th>
                    <th class="thead-dark bg-light">Address_Barriers</th>
                    <th class="thead-dark bg-light">Actions Needed</th>
                    <th class="thead-dark bg-light">Belongs to group</th>
                    <th class="thead-dark bg-light">Group Name</th>
                    <th class="thead-dark bg-light">Belong to social group</th>
                    <th class="thead-dark bg-light">Social group name</th>
                    <th class="thead-dark bg-light">coordinates</th>
                </tr>
                <?php
                $servername = 'localhost';
                $username = 'root';
                $password = '';
                $dbname = 'biashara_fund';

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM `biashara_fund`";
                $result = $conn->query($sql);

                $count = 0;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $count++;
                        $surname = $row['surname'];
                        $first_name = $row['first_name'];
                        $other_name = $row['other_name'];
                        $identification_number = $row['identification_number'];
                        $date_of_birth = $row['date_of_birth'];
                        $gender = $row['gender'];
                        $disability = $row['disability'];
                        $disability_specification = $row['disability_specification'];
                        $area_of_residence = $row['area_of_residence'];
                        $mobile_number = $row['mobile_number'];
                        $aware_of_fund = $row['aware_of_fund'];
                        $business_type = $row['business_type'];
                        $business_type_other = $row['business_type_other'];
                        $business_years = $row['business_years'];
                        $affirmative_fund_name = $row['affirmative_fund_name'];
                        $affirmative_fund_application_successful = $row['affirmative_fund_application_successful'];
                        $affirmative_fund_application_unsuccessful_reason = $row['affirmative_fund_application_unsuccessful_reason'];
                        $barriers_to_taking_loan = $row['barriers_to_taking_loan'];
                        $how_to_address_barriers = $row['how_to_address_barriers'];
                        $actions_needed_from_fund = $row['actions_needed_from_fund'];
                        $belongs_to_group = $row['belongs_to_group'];
                        $group_name = $row['group_name'];
                        $belongs_to_social_group = $row['belongs_to_social_group'];
                        $social_group_name = $row['social_group_name'];
                        $coordinates = $row['coordinates'];

                        echo "<tr>";
                        echo "<td>" . $count . "</td>";
                        echo "<td>" . $surname . "</td>";
                        echo "<td>" . $first_name . "</td>";
                        echo "<td>" . $other_name . "</td>";
                        echo "<td>" . $identification_number . "</td>";
                        echo "<td>" . $date_of_birth . "</td>";
                        echo "<td>" . $gender . "</td>";
                        echo "<td>" . $disability . "</td>";
                        echo "<td>" . $disability_specification . "</td>";
                        echo "<td>" . $area_of_residence . "</td>";
                        echo "<td>" . $mobile_number . "</td>";
                        echo "<td>" . $aware_of_fund . "</td>";
                        echo "<td>" . $business_type . "</td>";
                        echo "<td>" . $business_type_other . "</td>";
                        echo "<td>" . $business_years . "</td>";
                        echo "<td>" . $affirmative_fund_name . "</td>";
                        echo "<td>" . $affirmative_fund_application_successful . "</td>";
                        echo "<td>" . $affirmative_fund_application_unsuccessful_reason . "</td>";
                        echo "<td>" . $barriers_to_taking_loan . "</td>";
                        echo "<td>" . $how_to_address_barriers . "</td>";
                        echo "<td>" . $actions_needed_from_fund. "</td>";
                        echo "<td>" . $belongs_to_group . "</td>";
                        echo "<td>" . $group_name . "</td>";
                        echo "<td>" . $belongs_to_social_group . "</td>";
                        echo "<td>" . $social_group_name . "</td>";
                        echo "<td>" . $coordinates . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>No records found</td></tr>";
                }

                $conn->close();
                ?>
            </table>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-content">
        <div class="footer-column">
            <h3>About the Nairobi County Biashara Fund</h3>
            <p>The Nairobi County Biashara Fund is a revolving fund that provides loans to small and medium-sized enterprises (SMEs) in Nairobi County. The fund is managed by the Nairobi County Government and is designed to help SMEs grow and create jobs.</p>
        </div>
        <div class="footer-column">
            <h3>Contact Us</h3>
            <p>Nairobi County Biashara Fund<br>
            P.O. Box 12345<br>
            Nairobi, Kenya<br>
            (254) 709 014 747<br>
            nairobiservices@nairobi.go.ke</p>
        </div>

        </div>
        <div class="footer-copyright">
        <p>Copyright &copy; 2023 Nairobi County Government. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>


