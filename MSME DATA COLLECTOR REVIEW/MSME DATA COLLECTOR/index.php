<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="title-bar">
    <div class="title-bar-content">
      <div class="title">LET'S MAKE NAIROBI WORK</div>      
    </div>
  </div> 
    
  <div class="container">  
    <h1 class="p-5">Nairobi County Biashara Fund Assessment Questionnaire</h1>
   
    <form id = "form" action="process.php" method="post">  
      <section class="sect-a">
        <h2>Section A: Personal Details</h2>
        <div class="row">
          <div class="col-sm-6 col-md-4 col-12 col-lg-4">
            <div class="form-group">
              <label for="surname">Surname:</label>
              <input type="text" class="form-control" name="surname" id="surname">
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-12 col-lg-4">
            <div class="form-group">
              <label for="first_name">First name:</label>
              <input type="text" class="form-control" name="first_name" id="first_name">
            </div>            
          </div>

          <div class="col-sm-6 col-md-4 col-12 col-lg-4">
            <div class="form-group">
              <label for="other_name">Other name:</label>
              <input type="text" class="form-control" name="other_name" id="other_name">
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-12 col-lg-4">
            <div class="form-group">
              <label for="identification_number">ID Number:</label>
              <input type="number" class="form-control" name="identification_number" id="identification_number">
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-4">
            <div class="form-group">
              <label for="gender">Gender:</label>
              <select class="form-control" class="form-control" name="gender" id="gender">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
              </select>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-4">
            <div class="form-group">
              <label for="mobile_number">Mobile Number:</label>
              <input type="number" class="form-control" name="mobile_number" id="mobile_number">
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="date_of_birth">Date of Birth(Month/Day/Year):</label>
              <input type="date" class="form-control" name="date_of_birth" id="date_of_birth">
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="disability">Do you have any disability? Specify if yes:</label>
              <select class="form-control" name="disability" id="disability">
                <option value="" disabled selected>--Select--</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
              </select>
              <input type="text" class="form-control" name="disability_specification" id="disability_specification">
            </div>
          </div>

          <div class="col-12">
            <div class="form-group">
              <label for="area_of_residence">What's your area of residence?</label>
              <select class="form-control" class="form-control" name="area_of_residence" id="area_of_residence">
                  <option value="" disabled selected>SELECT WARD</option>
                  <optgroup label="Embakasi">
                      <option value="Embakasi Central">Embakasi Central</option>
                      <option value="Embakasi East">Embakasi East</option>
                      <option value="Embakasi North">Embakasi North</option>
                      <option value="Embakasi South">Embakasi South</option>
                      <option value="Embakasi West">Embakasi West</option>
                  </optgroup>
                  <optgroup label="Kasarani">
                      <option value="Kasarani Central">Kasarani Central</option>
                      <option value="Kasarani North">Kasarani North</option>
                      <option value="Kasarani South">Kasarani South</option>
                  </optgroup>
                  <optgroup label="Kiambu">
                      <option value="Kiambu Central">Kiambu Central</option>
                      <option value="Kiambu East">Kiambu East</option>
                      <option value="Kiambu North">Kiambu North</option>
                      <option value="Kiambu South">Kiambu South</option>
                </optgroup>
                <optgroup label="Kibra">
                  <option value="Kibra">Kibra</option>
                </optgroup>
                <optgroup label="Makadara">
                  <option value="Makadara Central">Makadara Central</option>
                  <option value="Makadara East">Makadara East</option>
                  <option value="Makadara North">Makadara North</option>
                  <option value="Makadara South">Makadara South</option>
                </optgroup>
                <optgroup label="Mathare">
                  <option value="Mathare North">Mathare North</option>
                  <option value="Mathare South">Mathare South</option>
                </optgroup>
                <optgroup label="Muthaiga">
                  <option value="Muthaiga">Muthaiga</option>
                </optgroup>
                <optgroup label="Roysambu">
                  <option value="Githurai">Githurai</option>
                  <option value="Kahawa">Kahawa</option>
                  <option value="Kahawa West">Kahawa West</option>
                  <option value="Roysambu">Roysambu</option>
                  <option value="Zimmerman">Zimmerman</option>
                </optgroup>
                <optgroup label="Starehe">
                  <option value="Central Business District">Central Business District</option>
                  <option value="Pumwani">Pumwani</option>
                  <option value="Ruaraka">Ruaraka</option>
                  <option value="Shauri Moyo">Shauri Moyo</option>
                </optgroup>
                <optgroup label="Westlands">
                  <option value="Highridge">Highridge</option>
                  <option value="Kangemi">Kangemi</option>
                  <option value="Kawangware">Kawangware</option>
                  <option value="Mountain View">Mountain View</option>
                  <option value="Parklands">Parklands</option>
                </optgroup>
              </select>
            </div>
          </div>

          <div class="col-12">
            <div class="form-group">
              <button class="btn btn-primary float-right" id="open-sect-b">SECTION B</button>
            </div>
          </div>
        </div>       
      </section>

      <section class="sect-b">
        <h2>Section B: BIASHARA FUND</h2>
        <div class="form-group">
          <label for="aware_of_fund">Are you aware of Nairobi County Biashara Fund?</label>
          <select class="form-control" class="form-control" name="aware_of_fund" id="aware_of_fund">
            <option value="" disabled selected>--Select--</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </div>

        <div class="form-group">
          <label for="business_type">Which kind of business are you involved in?</label>
          <select class="form-control" class="form-control" name="business_type" id="business_type">
            <option value="" disabled selected>--Select--</option>
            <option value="agribusinesses_food_supplies">Agribusinesses/food supplies</option>
            <option value="manufacturing_mechanics">Manufacturing/mechanics</option>
            <option value="construction_works">Construction/works</option>
            <option value="retail_wholesale_trade">Retail/wholesale/trade</option>
            <option value="hospitality_catering_event_organization_performing_arts">Hospitality/catering/event organization/performing arts</option>
            <option value="ict_services">ICT services</option>
            <option value="professional_consultancy_research_services">Professional/consultancy/research services</option>
            <option value="security_cleaning_services">Security/cleaning services</option>
            <option value="other">Other</option>
          </select>

          <input type="text" name="business_type_other" id="business_type_other" >
        </div>

        <div class="form-group">
          <label for="business_years">How long has your business been in existence?</label>
          <select class="form-control" name="business_years" id="business_years" class="form-control">
            <option value="" disabled selected>--Select--</option>
            <option value="0_5_years">0-5 years</option>
            <option value="5_10_years">5-10</option>
          </select>
        </div>

        <div class="col-12">
          <div class="form-group">
            <button class="btn btn-primary float-right" id="open-sect-c">SECTION C</button>
          </div>
        </div>
                
      </section>

      <section class="sect-c">  
        <div id="affirmative_fund_questions" >         
          <label for="affirmative_fund_name">Which affirmative fund did you apply?</label>
          <input type="text" name="affirmative_fund_name" id="affirmative_fund_name">
        </div> 
        
        <div class="form-group">
          <label for="affirmative_fund_application_successful">Was your application successful?</label>
          <select class="form-control" name="affirmative_fund_application_successful" id="affirmative_fund_application_successful">
            <option value="--Select--">--Select--</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>

        </div>
        
        <div class="form-group">
          <label for="affirmative_fund_application_unsuccessful_reason">If No to application successful, what was the reason for the failure to succeed in the application of the funds?</label>
          <input type="text" name="affirmative_fund_application_unsuccessful_reason" id="affirmative_fund_application_unsuccessful_reason">
        </div>
        
        <div class="form-group">
          <label for="barriers_to_taking_loan">What are the barriers/challenges that you think will hinder you from taking a loan from Nairobi Biashara fund?</label>
          <input type="text" name="barriers_to_taking_loan" id="barriers_to_taking_loan">
        </div>

        <div class="form-group">
          <label for="how_to_address_barriers">How should the identified barriers/challenges be addressed?</label>
          <input type="text" name="how_to_address_barriers" id="how_to_address_barriers">
        </div>

        <div class="form-group">
          <label for="actions_needed_from_fund">What actions do you think are needed from Nairobi Bashara fund, to contribute to creating an enabling environment for women/youth and PWDs, to participate in business in Kenya?</label>
          <input type="text" name="actions_needed_from_fund" id="actions_needed_from_fund">
        </div>

        <div class="form-group">
          <label for="belongs_to_group">Do you belong to any registered or none registered common interest group/associations?</label>
          <select class="form-control" name="belongs_to_group" id="belongs_to_group">
            <option value="--Select--">--Select--</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </div>

        <div class="form-group">
          <label for="group_name">If yes to belongs to group, please give detail (group name, registration number and date of registration)</label>
          <input type="text" name="group_name" id="group_name" >
        </div>

        <div class="form-group">
          <label for="belongs_to_social_group">Do you belong to any registered or non-registered social group?</label>
          <select class="form-control" name="belongs_to_social_group" id="belongs_to_social_group">
            <option value="--Select--">--Select--</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </div>

        <div class="form-group">
          <label for="social_group_name">If yes to belongs to social group, please give detail (group name, registration number and date of registration)</label>
          <input type="text" name="social_group_name" id="social_group_name" >
        </div>

        <div class="form-group">
          <input type="hidden" id="coordinates">
        </div>

        <div>
          <input type="submit" name="submit" value="Submit" />
        </div>
      </section>   
    </form>
    
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

  
  <script>
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        document.getElementById("coordinates").value = `${latitude}, ${longitude}`;
      }, function(error) {
        console.log("Geolocation error:", error);
      });
    } else {
      console.log("Geolocation is not supported in this browser.");
    }
  </script>
  <script>

  </script>

  <script src="script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>