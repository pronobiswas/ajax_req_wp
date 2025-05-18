<div id="immigration_form">
  <!-- ===header=== -->
  <header class="pro_container">
    <br>
    <div class="mainHeader hidden">
      <div class="logo">
        <img src="http://localhost/kabbi/wp-content/uploads/2025/02/Citizen-Path-10-1x.webp" alt="logo" />
      </div>
      <div class="login">
        <img src="./assets/images/user1.png" alt="png" width="16" /> Login
      </div>
    </div>
    <nav>
      <button class="veryfiedANDscecuredBTN">Verified & Secured</button>
      <h1>Noncitizen Change of Address Card Preparation</h1>
      <div class="headerBTNBox">
        <button onclick="handleSaveBtn()">SAVE</button>
        <button>HELP</button>
      </div>
    </nav>
    <div class="heading">
      <div class="headingContent">
        <h2 id="FormHeading">
          First, let's determine your eligibility to prepare Form AR-11,
          Alien's Change of Address
        </h2>
        <p id="Formparagraph">
          Complete the information below to prepare a free Form AR-11. Use
          the AR-11 to notify USCIS of an address change.
        </p>
      </div>
      <!-- ===page option=== -->
      <div id="pageOptions">
        <div class="pageOption">
          <span id="outoftext">page <span id="pageNum">1</span> of 3</span>
          <span>&#11206;</span>
        </div>
        <div id="formPagenetion" class=" hidden">
          <ol>
            <li onclick="handle_phase_navigation('phase1' , isValidatePhase1)">personal</li>
            <li onclick="handle_phase_navigation('phase2', isValidatePhase2)">Entry Into US</li>
            <li onclick="handle_phase_navigation('phase3' ,isValidatePhase3)">Continious residence</li>
            <li onclick="handle_phase_navigation('phase4',isValidatePhase4)">Emplyment Authorization</li>
            <li onclick="handle_phase_navigation('phase5',isValidatePhase5)">Current Spouse</li>
            <li onclick="handle_phase_navigation('phase6',isValidatePhase6)">Prior Maggaige</li>
            <li onclick="handle_phase_navigation('phase7',isValidatePhase7)">Child Info</li>
            <li onclick="handle_phase_navigation('phase8',isValidatePhase8)">Living Info</li>
            <li onclick="handle_phase_navigation('phase9',isValidatePhase9)">Employment Info</li>
            <li onclick="handle_phase_navigation('phase10',isValidatePhase10)">Famlily Info</li>
          </ol>
        </div>
      </div>
    </div>
  </header>
  <!-- *******form start here************ -->
  <div class="pro_container">
    <div class="pro_form">
      <!-- =========PERSONAL INFORMATION========= -->
      <form id="cityzenPth_form" method="POST">
        <section id="phase1" class="pro_form_phase ">
          <h2 class="sectionHeading">PERSONAL INFORMATION</h2>
          <div class="phaseOneContent phaseContent">
            <!-- $$$$$$$$$genaralInfo$$$$$$$$$$$ -->
            <div class="genaralInfo">
              <!-- full_name -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="full_name">Full Name (First, Middle, Last)</label>
                </div>
                <div class="pro_input">
                  <input type="text" name="full_name" id="full_name" placeholder="Full Name" required />
                </div>
              </div>
              <!-- other_name -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="other_name">Other Name (First, Middle, Last)</label>
                </div>
                <div class="pro_input">
                  <input type="text" name="other_name" placeholder="Other Name" id="other_name" required />
                </div>
              </div>
              <!-- mailing_address -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="mailing_address">Mailing Address</label>
                </div>
                <div class="pro_input">
                  <input type="text" name="mailing_address" placeholder="Mailing Address" id="mailing_address" required />
                </div>
              </div>
              <!-- city -->
              <div class="pro_input_Row">
                <div class="pro_label"><label for="city">City</label></div>
                <div class="pro_input">
                  <input type="text" id="city" name="city" placeholder="City" required />
                </div>
              </div>
              <!-- state -->
              <div class="pro_input_Row">
                <div class="pro_label"><label for="state">State</label></div>
                <div class="pro_input">
                  <input type="text" id="state" name="state" required />
                </div>
              </div>
              <!-- zip_code -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="zip_code">Zip Code</label>
                </div>
                <div class="pro_input">
                  <input type="text" id="zip_code" name="zip_code" placeholder="Zip Code" required />
                </div>
              </div>
              <!-- phone_number -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="phone_number">Phone Number</label>
                </div>
                <div class="pro_input">
                  <input type="text" id="phone_number" name="phone_number" placeholder="Phone Number" required />
                </div>
              </div>
              <!-- email_address -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="email_address">Email Address</label>
                </div>
                <div class="pro_input">
                  <input type="email" id="email_address" name="email_address" placeholder="Email Address" required />
                </div>
              </div>
              <!-- Height -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="height">Height</label>
                </div>
                <div class="pro_input">
                  <input type="number" id="height" name="height" placeholder="Height" required />
                </div>
              </div>
              <!-- Weight -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="weight">Weight</label>
                </div>
                <div class="pro_input">
                  <input type="number" id="weight" name="weight" placeholder="Weight" required />
                </div>
              </div>
            </div>
            <!-- $$$$$$personalInfo$$$$$$ -->
            <div class="personalInfo">
              <!-- date_of_birth -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="date_of_birth">Date of Birth</label>
                </div>
                <div class="pro_input">
                  <input type="text" id="date_of_birth" name="date_of_birth" placeholder="Date of Birth" required />
                </div>
              </div>
              <!-- place_of_birth -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="place_of_birth">Place of Birth</label>
                </div>
                <div class="pro_input">
                  <input type="text" id="place_of_birth" name="place_of_birth" placeholder="Place of Birth" required />
                </div>
              </div>
              <!-- Country of Citizenship -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="country_of_citizenship">Place of Birth (city/town,
                    state/province/country):</label>
                </div>
                <div class="pro_input">
                  <input type="text" name="country_of_citizenship" id="country_of_citizenship" placeholder="Country of Citizenship" required />
                </div>
              </div>
              <!-- Marital Status -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="marital_status">Marital Status</label>
                </div>
                <div class="pro_input">
                  <select id="marital_status" name="marital_status" required>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="divorced">Divorced</option>
                    <option value="widowed">Widowed</option>
                  </select>
                </div>
              </div>
              <button type="button" id="nextBtn1" onclick="handePhaseOne()">next</button>
            </div>
          </div>
        </section>
        <!-- =====ENTRY INTO UNITED STATES phase2 ======== -->
        <section id="phase2" class="pro_form_phase hidden">
          <h2>ENTRY INTO UNITED STATES</h2>
          <div class="phaseTwoContent phaseContent">
            <div class="pro_input_wraper">
              <!-- date_of_entry -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="date_of_entry">Date of original entry into the United States:</label>
                </div>
                <div class="pro_input">
                  <input
                    type="date"
                    id="date_of_entry"
                    name="date_of_entry"
                    required />
                </div>
              </div>
              <!-- how_to_enter -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="how_to_enter">How did you enter the United States (e.g., I-94, Visa,
                    EWI,etc.):</label>
                </div>
                <div class="pro_input">
                  <input
                    type="text"
                    id="how_to_enter"
                    name="how_to_enter"
                    required />
                </div>
              </div>
              <!-- place_of_entry -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="place_of_entry">Place of entry</label>
                </div>
                <div class="pro_input">
                  <input
                    type="text"
                    id="place_of_entry"
                    name="place_of_entry"
                    required />
                </div>
              </div>
              <!-- Have you ever left the U.S -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="have_you_ever_left_the_US">Have you ever left the U.S. since your original
                    entry</label>
                </div>
                <div class="pro_input">
                  <select
                    id="have_you_ever_left_the_US"
                    name="have_you_ever_left_the_US"
                    required>
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                  </select>
                </div>
              </div>
            </div>
            <!-- Reason for Leaving table -->
            <div id="ReasonforLeavingTable" class="hidden">
              <h4 class="pro_h4">If yes, please provide the following information:</h4>
              <fieldset>
                <legend>Reason for Leaving 1</legend>
                <div class="resone_forLiveing_warper">
                  <!-- resone of liveing 1 -->
                  <div class="resone_of_liveing" id="resone_of_liveing1">
                    <!-- --resone of leaving-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="reason_for_leaving">Reason for Leaving</label>
                      </div>
                      <div class="pro_input">
                        <input
                          type="text"
                          name="reason_for_leaving"
                          id="reason_for_leaving" />
                      </div>
                    </div>
                    <!-- --departure_date1-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="departure_date1">
                          Date You Left (month/year)
                        </label>
                      </div>
                      <div class="pro_input">
                        <input
                          type="date"
                          name="departure_date1"
                          id="departure_date1" />
                      </div>
                    </div>
                    <!-- --return date1-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="return_date1">Date of Return (month/year)
                        </label>
                      </div>
                      <div class="pro_input">
                        <input
                          type="date"
                          name="return_date1"
                          id="return_date1" />
                      </div>
                    </div>
                  </div>

                </div>
              </fieldset>
              <!-- resone of liveing 2 -->
              <fieldset>
                <legend>Reason for Leaving 2</legend>
                <div class="resone_of_liveing" id="resone_of_liveing2">
                  <!-- --resone of leaving-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label">
                      <label for="reason_for_leaving2">Reason for Leaving</label>
                    </div>
                    <div class="pro_input">
                      <input
                        type="text"
                        name="reason2"
                        id="Reason_for_Leaving2" />
                    </div>
                  </div>
                  <!-- --departure_date2-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label">
                      <label for="departure_date2">
                        <p>Date You Left</p>
                        <p>(month/year)</p>
                      </label>
                    </div>
                    <div class="pro_input">
                      <input
                        type="date"
                        name="departure_date2"
                        id="departure_date2" />
                    </div>
                  </div>
                  <!-- --return date2-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label">
                      <label for="return_date2">
                        <p>Date of Return</p>
                        <p>(month/year)</p>
                      </label>
                    </div>
                    <div class="pro_input">
                      <input
                        type="date"
                        name="return_date2"
                        id="return_date2" />
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
          <div class="pahasebtnBox">
            <button class="stepBtn" onclick="handlePreviousBtn(phase1,phase2)"> &lt; Previous</button>
            <button class="stepBtn" id="nextBtn2" onclick="handlePhase2btn()">next &gt;</button>
          </div>
        </section>
        <!-- ======CONTINUOUS RESIDENCE IN THE UNITED STATES ======= -->
        <section id="phase3" class="pro_form_phase hidden">
          <h2>CONTINUOUS RESIDENCE IN THE UNITED STATES</h2>
          <div class="phaseThreeContent phaseContent">

            <div class="radioRow">
              <h4 class="pro_h4">Are you continuous Residence in the United State</h4>
              <div>
                <label for="notContinuousResidence">No</label>
                <input
                  type="radio"
                  id="notContinuousResidence"
                  name="isContinuousResidence"
                  value="no"
                  checked />
              </div>
              <div>
                <label for="continuousResidence">Yes</label>
                <input
                  type="radio"
                  id="continuousResidence"
                  name="isContinuousResidence"
                  value="yes" />
              </div>
            </div>

            <div id="residences" class="hidden">
              <div class="residence_detail_wraper">
                <fieldset>
                  <div class="pro_form_group">
                    <!-- --residence_address-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="residence_address1">Address</label>
                      </div>
                      <div class="pro_input">
                        <input
                          type="text"
                          name="residence_address1"
                          id="residence_address1" />
                      </div>
                    </div>
                    <!-- --residence_address_from_date1-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="from_date1"> From (month/year) </label>
                      </div>
                      <div class="pro_input">
                        <input type="date" name="from_date1" id="from_date1" />
                      </div>
                    </div>
                    <!-- --residence_address_to_date1-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="to_date1">To (month/year)</label>
                      </div>
                      <div class="pro_input">
                        <input type="date" name="to_date1" id="to_date1" />
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset>
                  <div class="pro_form_group">
                    <!-- --residence_address-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="address2">Address</label>
                      </div>
                      <div class="pro_input">
                        <input type="text" name="address2" id="address2" />
                      </div>
                    </div>
                    <!-- --residence_address_from_date2-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="from_date2">From (month/year)</label>
                      </div>
                      <div class="pro_input">
                        <input type="date" name="from_date2" id="from_date2" />
                      </div>
                    </div>
                    <!-- --residence_address_to_date2-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="to_date2">From (month/year)</label>
                      </div>
                      <div class="pro_input">
                        <input type="date" name="to_date2" id="to_date2" />
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset>
                  <div class="pro_form_group">
                    <!-- --residence_address-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="address3">Address</label>
                      </div>
                      <div class="pro_input">
                        <input type="text" name="address3" id="address3" />
                      </div>
                    </div>
                    <!-- --residence_address_from_date2-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="from_date3">From (month/year)</label>
                      </div>
                      <div class="pro_input">
                        <input type="date" name="from_date3" id="from_date3" />
                      </div>
                    </div>
                    <!-- --residence_address_to_date2-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="to_date3">From (month/year)</label>
                      </div>
                      <div class="pro_input">
                        <input type="date" name="to_date3" id="to_date3" />
                      </div>
                    </div>
                  </div>
                </fieldset>
              </div>
            </div>

            <!-- SCHOOL/MILITARY STATUS -->
            <div class="educationORmilitary">
              <h3 class="pro_h3">SCHOOL/MILITARY STATUS</h3>
              <!-- Current Education Status -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="current_education_status">Current Education Status</label>
                </div>
                <div class="pro_input">
                  <select
                    id="current_education_status"
                    name="current_education_status"
                    required>
                    <option value="high_school">High School</option>
                    <option value="college">College</option>
                    <option value="university">University</option>
                    <option value="graduate_school">Graduate School</option>
                  </select>
                </div>
              </div>
              <!-- Where Education Received -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="where_education_received">Name, City, and State of School Currently Attending or Where
                    Education Received:</label>
                </div>
                <div class="pro_input">
                  <input
                    type="text"
                    id="where_education_received"
                    name="where_education_received"
                    required />
                </div>
              </div>
              <!-- Were you a member in the US military -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="us_military">Were you a member of the U.S. military?</label>
                </div>
                <div class="pro_input">
                  <select id="us_military" name="us_military" required>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>
              </div>
            </div>
            <!-- -----left US---- -->
            <div class="radioRow">
              <h4 class="pro_h4">
                Have you left the United States at any time between June 15,
                2007 to present?
              </h4>
              <div>
                <input
                  type="radio"
                  id="no"
                  name="left_US"
                  value="no"
                  checked
                  required />
                <label for="no">No</label>
              </div>
              <div>
                <input
                  type="radio"
                  id="yes"
                  name="left_US"
                  value="yes"
                  required />
                <label for="yes">Yes</label>
              </div>
            </div>
            <div id="explainLeftReason" class="hidden">
              <h4>If so,</4>
                <p><label for="why_left_us">Please Explain</label></p>
                <textarea
                  name="why_left_us"
                  id="why_left_us"
                  style="width: 100%"
                  rows="10"></textarea>
            </div>
          </div>
          <div class="pahasebtnBox">
            <button class="stepBtn" onclick="handlePreviousBtn(phase2,phase3)"> &lt; Previous</button>
            <button class="stepBtn" id="nextBtn3" onclick="handlePhase3btn()">
              next &gt;
            </button>
          </div>
        </section>
        <!-- =======Employment Authorization =========== -->
        <section id="phase4" class="pro_form_phase hidden">

          <h2>EMPLOYMENT AUTHORIZATION</h2>
          <div class="phaseFourContent phaseContent">

            <div class="employmentAuth">
              <!-- current_annual_income -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="current_annual_income">Current Annual Income</label>
                </div>
                <div class="pro_input">
                  <input
                    type="number"
                    id="current_annual_income"
                    name="current_annual_income"
                    required />
                </div>
              </div>
              <!-- current_emloyer_name -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="current_emloyer_name">Employer Name</label>
                </div>
                <div class="pro_input">
                  <input
                    type="text"
                    id="current_emloyer_name"
                    name="current_emloyer_name"
                    required />
                </div>
              </div>
              <!-- current_emloyer_address -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="current_emloyer_address">Employer Address</label>
                </div>
                <div class="pro_input">
                  <input
                    type="text"
                    id="current_emloyer_address"
                    name="current_emloyer_address"
                    required />
                </div>
              </div>
              <!-- Why do you want your Work Authorization -->
              <div class="explain_work_authoraizetion">
                <label for="why_work_auth">Why do you want your Work Authorization?</label>
                <textarea
                  name="why_work_auth"
                  id="why_work_auth"
                  rows="6"></textarea>
              </div>
            </div>
          </div>
          <div class=" pahasebtnBox">
            <button class="stepBtn" onclick="handlePreviousBtn(phase3,phase4)">&lt; Previous</button>
            <button class="stepBtn" onclick="handlePhaseFourBtn()" id="nextBtn4">next &gt; </button>
          </div>
        </section>
        <!-- =======INFORMATION ABOUT YOUR CURRENT SPOUSE====== -->
        <section id="phase5" class="pro_form_phase hidden">
          <h2>INFORMATION ABOUT YOUR CURRENT SPOUSE</h2>
          <div class="phaseFiveContent phaseContent">

            <!-- <p>Information about all your current spouse :</p> -->
            <div id="currentSpouse">
              <div class="pro_form_group">
                <!-- --spouse_name-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="spouse_name">NAme of Spouse :(last,First,Middle):</label>
                  </div>
                  <div class="pro_input">
                    <input type="text" name="spouse_name" id="spouse_name" />
                  </div>
                </div>
                <!-- --cityzenship_of_spouse-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="cityzenship_of_spouse">Spouse Cityzenship of What Country:</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="text"
                      name="cityzenship_of_spouse"
                      id="cityzenship_of_spouse" />
                  </div>
                </div>
                <!-- --current_address_of_spouse-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="current_address_of_spouse">Current Address of Spouse</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="text"
                      name="current_address_of_spouse"
                      id="current_address_of_spouse" />
                  </div>
                </div>
                <!-- --spouseImmigration-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="spouseImmigration">Immigration Status of Spouse</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="text"
                      name="spouseImmigration"
                      id="spouseImmigration" />
                  </div>
                </div>
                <!-- --spouse_aline_registration_number-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="spouse_aline_registration_number">Spouse Aline Registration Number</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="text"
                      name="spouse_aline_registration_number"
                      id="spouse_aline_registration_number" />
                  </div>
                </div>
                <!-- --spouse_birth_date-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="spouse_birth_date">Spouse Birth Date :(Month,Day,Year)</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="date"
                      name="spouse_birth_date"
                      id="spouse_birth_date" />
                  </div>
                </div>
                <!-- --spouse_country_of_birth-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="spouse_country_of_birth">Spouse Country of Birth :(City and Country)</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="text"
                      name="spouse_country_of_birth"
                      id="spouse_country_of_birth" />
                  </div>
                </div>
                <!-- --spouse_earn_per_week-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="spouse_earn_per_week">Spouse's Aaverage Earnings per Week : $</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="number"
                      name="spouse_earn_per_week"
                      id="spouse_earn_per_week" />
                  </div>
                </div>
                <!-- --spouse_social_security_number-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="spouse_social_security_number">Spouse's US Social Scecurity Number</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="number"
                      name="spouse_social_security_number"
                      id="spouse_social_security_number" />
                  </div>
                </div>
                <!-- --date_of_marriage-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="date_of_marriage">Date of Marriage :</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="date"
                      name="date_of_marriage"
                      id="date_of_marriage" />
                  </div>
                </div>
                <!-- --place_of_marriage-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="place_of_marriage">Place of Marriage :</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="text"
                      name="place_of_marriage"
                      id="place_of_marriage" />
                  </div>
                </div>
                <!-- --spouse_maiden_name-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="spouse_maiden_name">Spouse MAiden NAme :</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="text"
                      name="spouse_maiden_name"
                      id="spouse_maiden_name" />
                  </div>
                </div>
                <!-- --place_spouse_first_entered_us-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="place_spouse_first_entered_us">Place Spouse First Entered the Us</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="text"
                      name="place_spouse_first_entered_us"
                      id="place_spouse_first_entered_us" />
                  </div>
                </div>
                <!-- --date_spouse_become_us_citizen-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="date_spouse_first_entered_us">Date Spouse First Entered the Us</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="date"
                      name="date_spouse_first_entered_us"
                      id="date_spouse_first_entered_us" />
                  </div>
                </div>
                <!-- --date_spouse_become_us_citizen-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="date_spouse_become_us_citizen">
                      <p>-Date Spouse Become a US Citizen:</p>
                      <p>-What City and State She Become A US Citizen In :</p>
                    </label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="date"
                      name="date_spouse_become_us_citizen"
                      id="date_spouse_become_us_citizen" />
                  </div>
                </div>
              </div>
            </div>
            <!-- ----Information about your spouse's employment in the US---- -->
            <div id="informationSpouseEmployment">
              <h2>CURRENT SPOUSE'S EMPLOYMENT INFORMATION :</h2>
              <br>

              <div class="pro_form_gorup">
                <!-- --full_name_of_spouse_employer-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="full_name_of_spouse_employer">Full Name of Spouse's Emloyer</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="text"
                      name="full_name_of_spouse_employer"
                      id="full_name_of_spouse_employer" />
                  </div>
                </div>
                <!-- --full_address_of_spouse_employer-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="full_address_of_spouse_employer">Full address of Spouse's Employer</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="text"
                      name="full_address_of_spouse_employer"
                      id="full_address_of_spouse_employer" />
                  </div>
                </div>
                <!-- --earning_per_week_of_spouse-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="earning_per_week_of_spouse">Earnning Per week:(Approximate)</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="text"
                      name="earning_per_week_of_spouse"
                      id="earning_per_week_of_spouse" />
                  </div>
                </div>
                <!-- --type_of_work_preformed_by_spouse-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="type_of_work_preformed_by_spouse">Type of Work Preformed</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="text"
                      name="type_of_work_preformed_by_spouse"
                      id="type_of_work_preformed_by_spouse" />
                  </div>
                </div>
                <!-- --start_of_employment-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="start_of_employment">Start of Employment:(Month,Day,Year)</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="date"
                      name="start_of_employment"
                      id="start_of_employment" />
                  </div>
                </div>
                <!-- --end_of_employment-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="end_of_employment">End of Employment :(Month,Day,Year)</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="date"
                      name="end_of_employment"
                      id="end_of_employment" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="pahasebtnBox">
            <button class="stepBtn" onclick="handlePreviousBtn(phase4,phase5)">&lt; Previous</button>
            <button class="stepBtn" id="nextBtn5" onclick="handlePhaseFiveBtn()">next &gt;</button>

          </div>
        </section>
        <!-- =====INFORMATION ABOUT YOUR PRIOR SPOUSE==== -->
        <section id="phase6" class="pro_form_phase hidden">
          <h2>INFORMATION ABOUT YOUR PRIOR MARRIAGE</h2>
          <div class="phaseSixContent phaseContent">

            <div id="phase6wraper">
              <div class="part1">
                <!-- <p>Information about your prior mariage</p> -->
                <div class="pro_form_group">
                  <!-- --full_name_of_prior_spouse-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label">
                      <label for="full_name_of_prior_spouse">Full Name of your Prior Spouse(Last,First,Middle)</label>
                    </div>
                    <div class="pro_input">
                      <input type="text" id="full_name_of_prior_spouse" name="full_name_of_prior_spouse" required />
                    </div>
                  </div>
                  <!-- --date_marrige_began-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label">
                      <label for="date_prior_marrige_began">Date Marrige Began:</label>
                    </div>
                    <div class="pro_input">
                      <input type="text" id="date_prior_marrige_began" name="date_prior_marrige_began" required />
                    </div>
                  </div>
                  <!-- --date_prior_marrige_ended-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label">
                      <label for="date_prior_marrige_ended">Date Marrige Ended:</label>
                    </div>
                    <div class="pro_input">
                      <input type="text" id="date_prior_marrige_ended" name="date_prior_marrige_ended" required />
                    </div>
                  </div>
                  <!-- --place_marrige_ended-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label">
                      <label for="place_prior_marrige_ended">Place Marriage Ended(City and Country)</label>
                    </div>
                    <div class="pro_input">
                      <input type="text" id="place_prior_marrige_ended" name="place_prior_marrige_ended" required />
                    </div>
                  </div>
                  <!-- --description_of_why_marrige_ended-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label">
                      <label for="description_of_why_marrige_ended">Description of why Marrige Ended</label>
                    </div>
                    <div class="pro_input">
                      <input type="text" id="description_of_why_marrige_ended" name="description_of_why_marrige_ended" required />
                    </div>
                  </div>
                  <button class="addMore" onclick="handleAddmore1()">
                    Add More &nbsp; <b>+</b>
                  </button>
                </div>
              </div>
              <div class="part2 hidden">
                <h2>INFORMATION ABOUT YOUR PRIOR MARRIAGE</h2>
                <br>
                <!-- ===fildset=== -->
                <fieldset>
                  <legend>Information about your prior mariage</legend>
                  <div class="pro_form_group">
                    <!-- --full_name_of_prior_spouse-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="full_name_of_prior_spouse1">Full Name of your Prior Spouse(Last,First,Middle)</label>
                      </div>
                      <div class="pro_input">
                        <input type="text" id="full_name_of_prior_spouse1" name="full_name_of_prior_spouse1" required />
                      </div>
                    </div>
                    <!-- --date_prior_marrige_began-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="date_prior_marrige_began1">Date Marrige Began:</label>
                      </div>
                      <div class="pro_input">
                        <input type="text" id="date_prior_marrige_began1" name="date_prior_marrige_began1" required />
                      </div>
                    </div>
                    <!-- --date_marrige_ended-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="date_prior_marrige_ended1">Date Marrige Ended:</label>
                      </div>
                      <div class="pro_input">
                        <input type="text" id="date_prior_marrige_ended1" name="date_prior_marrige_ended1" required />
                      </div>
                    </div>
                    <!-- --place_marrige_ended-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="place_prior_marrige_ended1">Place Marriage Ended(City and Country)</label>
                      </div>
                      <div class="pro_input">
                        <input type="text" id="place_prior_marrige_ended1" name="place_prior_marrige_ended1" required />
                      </div>
                    </div>
                    <!-- --description_of_why_marrige_ended-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="description_of_why_marrige_ended1">Description of why Marrige Ended</label>
                      </div>
                      <div class="pro_input">
                        <input type="text" id="description_of_why_marrige_ended1" name="description_of_why_marrige_ended1" required />
                      </div>
                    </div>
                  </div>

                </fieldset>
                <br>
                <fieldset>
                  <legend>Information about your prior mariage</legend>
                  <div class="pro_form_group">
                    <!-- --full_name_of_prior_spouse-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="full_name_of_prior_spouse2">Full Name of your Prior Spouse(Last,First,Middle)</label>
                      </div>
                      <div class="pro_input">
                        <input type="text" id="full_name_of_prior_spouse2" name="full_name_of_prior_spouse2" required />
                      </div>
                    </div>
                    <!-- --date_marrige_began-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="date_prior_marrige_began2">Date Marrige Began:</label>
                      </div>
                      <div class="pro_input">
                        <input type="text" id="date_prior_marrige_began2" name="date_prior_marrige_began2" required />
                      </div>
                    </div>
                    <!-- --date_marrige_ended-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="date_prior_marrige_ended2">Date Marrige Ended:</label>
                      </div>
                      <div class="pro_input">
                        <input type="text" id="date_prior_marrige_ended2" name="date_prior_marrige_ended2" required />
                      </div>
                    </div>
                    <!-- --place_marrige_ended-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="place_prior_marrige_ended2">Place Marriage Ended(City and Country)</label>
                      </div>
                      <div class="pro_input">
                        <input type="text" id="place_prior_marrige_ended2" name="place_prior_marrige_ended2" required />
                      </div>
                    </div>
                    <!-- --description_of_why_marrige_ended-- -->
                    <div class="pro_input_Row">
                      <div class="pro_label">
                        <label for="description_of_why_marrige_ended2">Description of why Marrige Ended</label>
                      </div>
                      <div class="pro_input">
                        <input type="text" id="description_of_why_marrige_ended2" name="description_of_why_marrige_ended2" required />
                      </div>
                    </div>
                  </div>

                </fieldset>
              </div>
            </div>
          </div>

          <div class="pahasebtnBox">
            <button class="stepBtn" onclick="handlePreviousBtn(phase5,phase6)">&lt; Previous</button>
            <button class="stepBtn" onclick="handlePhase6next()" id="nextBtn6">Next &gt;</button>
          </div>
        </section>
        <!-- ==========INFORMATION ABOUT YOUR CHILDREN================= -->
        <section id="phase7" class="pro_form_phase hidden">
          <h2>INFORMATION ABOUT YOUR CHILDREN</h2>
          <!-- <p>Information about all your children</p> -->
          <!-- <div class="pro_table_warper">
            <div class="pro_table">
              <table>
                <tr>
                  <td>
                    <label for="name_of_child">Name of Child:(Last,First,Middle)</label>
                  </td>
                  <td>
                    <label for="child_citizenship">Child's Citizenship of What Country</label>
                  </td>
                  <td>
                    <label for="child_current_address">Child's Current Address:(City and Country)</label>
                  </td>
                  <td>
                    <label for="child_immigration_status">Immigration Status of child</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input
                      type="text"
                      name="name_of_child"
                      id="name_of_child" />
                  </td>
                  <td>
                    <input
                      type="text"
                      name="child_citizenship"
                      id="child_citizenship" />
                  </td>
                  <td>
                    <input
                      type="text"
                      name="child_current_address"
                      id="child_current_address" />
                  </td>
                  <td rowspan="3">
                    <input
                      type="text"
                      name="child_immigration_status"
                      id="child_immigration_status" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="child_alien_registration_number">Child's Alien Registration Number</label>
                  </td>
                  <td>
                    <label for="child_birth_date">Child's Birth Date:(Month,Day,Year)</label>
                  </td>
                  <td>
                    <label for="child_country_of_birth">Child's Country of Birth:(City and Country)</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input
                      type="text"
                      name="child_alien_registration_number"
                      id="child_alien_registration_number" />
                  </td>
                  <td>
                    <input
                      type="text"
                      name="child_birth_date"
                      id="child_birth_date" />
                  </td>
                  <td>
                    <input
                      type="text"
                      name="child_country_of_birth"
                      id="child_country_of_birth" />
                  </td>
                </tr>
                <tr>
                  <td colspan="4">
                    <div style="display: flex;">
                      <label for="child_average_earnings" class="text-nowrap">Child's Average Earnings Per Week: $</label>
                      <input
                        type="text"
                        id="child_average_earnings"
                        name="child_average_earnings"
                        required />
                    </div>
                  </td>
                </tr>
              </table>
            </div>
            <br />
            <br />
            <div class="pro_table">
              <table>
                <tr>
                  <td>Name of Child:(Last,First,Middle)</td>
                  <td>Child's Citizenship of What Country</td>
                  <td>Child's Current Address:(City and Country)</td>
                  <td>Immigration Status of child</td>
                </tr>
                <tr>
                  <td><input type="text" /></td>
                  <td><input type="text" /></td>
                  <td><input type="text" /></td>
                </tr>
                <tr>
                  <td>Child's Alien Registration Number</td>
                  <td>Child's Birth Date:(Month,Day,Year)</td>
                  <td>Child's Country of Birth:(City and Country)</td>
                </tr>
                <tr>
                  <td>
                    <input type="text" />
                  </td>
                  <td><input type="text" /></td>
                  <td><input type="text" /></td>
                </tr>
                <tr>
                  <td>
                    <label for="child_average_earnings">Child's Average Earnings Per Week: $</label>
                    <input type="text" class="form-control" />
                  </td>
                </tr>
              </table>
            </div>
            <br />
            <br />
            <div class="pro_table">
              <table>
                <tr>
                  <td>Name of Child:(Last,First,Middle)</td>
                  <td>Child's Citizenship of What Country</td>
                  <td>Child's Current Address:(City and Country)</td>
                  <td>Immigration Status of child</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" /></td>
                  <td><input type="text" class="form-control" /></td>
                  <td><input type="text" class="form-control" /></td>
                </tr>
                <tr>
                  <td>Child's Alien Registration Number</td>
                  <td>Child's Birth Date:(Month,Day,Year)</td>
                  <td>Child's Country of Birth:(City and Country)</td>
                </tr>
                <tr>
                  <td>
                    <input type="text" class="form-control" />
                  </td>
                  <td><input type="text" class="form-control" /></td>
                  <td><input type="text" class="form-control" /></td>
                </tr>
                <tr>
                  <td>
                    <label for="child_average_earnings">Child's Average Earnings Per Week: $</label>
                    <input type="text" class="form-control" />
                  </td>
                </tr>
              </table>
            </div>
            <br />
            <br />
            <div class="pro_table">
              <table>
                <tr>
                  <td>Name of Child:(Last,First,Middle)</td>
                  <td>Child's Citizenship of What Country</td>
                  <td>Child's Current Address:(City and Country)</td>
                  <td>Immigration Status of child</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" /></td>
                  <td><input type="text" class="form-control" /></td>
                  <td><input type="text" class="form-control" /></td>
                </tr>
                <tr>
                  <td>Child's Alien Registration Number</td>
                  <td>Child's Birth Date:(Month,Day,Year)</td>
                  <td>Child's Country of Birth:(City and Country)</td>
                </tr>
                <tr>
                  <td>
                    <input type="text" class="form-control" />
                  </td>
                  <td><input type="text" class="form-control" /></td>
                  <td><input type="text" class="form-control" /></td>
                </tr>
                <tr>
                  <td>
                    <label for="child_average_earnings">Child's Average Earnings Per Week: $</label>
                    <input type="text" class="form-control" />
                  </td>
                </tr>
              </table>
            </div>
            <br />
            <br />
            <div class="pro_table">
              <table>
                <tr>
                  <td>Name of Child:(Last,First,Middle)</td>
                  <td>Child's Citizenship of What Country</td>
                  <td>Child's Current Address:(City and Country)</td>
                  <td>Immigration Status of child</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" /></td>
                  <td><input type="text" class="form-control" /></td>
                  <td><input type="text" class="form-control" /></td>
                </tr>
                <tr>
                  <td>Child's Alien Registration Number</td>
                  <td>Child's Birth Date:(Month,Day,Year)</td>
                  <td>Child's Country of Birth:(City and Country)</td>
                </tr>
                <tr>
                  <td>
                    <input type="text" class="form-control" />
                  </td>
                  <td><input type="text" class="form-control" /></td>
                  <td><input type="text" class="form-control" /></td>
                </tr>
                <tr>
                  <td>
                    <label for="child_average_earnings">Child's Average Earnings Per Week: $</label>
                    <input type="text" class="form-control" />
                  </td>
                </tr>
              </table>
            </div>
          </div> -->

          <div class="phaseSevenContent phaseContent">
            <div class="pro_from_group_wraper">
              <br>
              <div class="pro_form_group" id="child_Info1">
                <!-- --name_of_child-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="name_of_child">Name of Child:(Last,First,Middle)</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="text"
                      name="name_of_child"
                      id="name_of_child" />
                  </div>
                </div>
                <!-- --child_citizenship-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="child_citizenship">Child's Citizenship of What Country</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="text"
                      name="child_citizenship"
                      id="child_citizenship" />
                  </div>
                </div>
                <!-- --child_current_address-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="child_current_address">Child's Current Address:(City and Country)</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="text"
                      name="child_current_address"
                      id="child_current_address" />
                  </div>
                </div>
                <!-- --child_immigration_status-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="child_immigration_status">Immigration Status of child</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="text"
                      name="child_immigration_status"
                      id="child_immigration_status" />
                  </div>
                </div>
                <!-- --child_alien_registration_number-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="child_alien_registration_number">Child's Alien Registration Number</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="text"
                      name="child_alien_registration_number"
                      id="child_alien_registration_number" />
                  </div>
                </div>
                <!-- --child_birth_date-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="child_birth_date">Child's Birth Date:(Month,Day,Year)</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="date"
                      name="child_birth_date"
                      id="child_birth_date" />
                  </div>
                </div>
                <!-- --child_country_of_birth-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="child_country_of_birth">Child's Country of Birth:(City and Country)</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="text"
                      name="child_country_of_birth"
                      id="child_country_of_birth" />
                  </div>
                </div>
                <!-- --child_average_earnings-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="child_average_earnings">Child's Average Earnings Per Week: $</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="number"
                      name="child_average_earnings"
                      id="child_average_earnings" />
                  </div>
                </div>
                <button class="addMore" onclick="handleHiddenToogle(fildsetChidInfo)">Add More <b>+</b> </button>
              </div>
              <br>
              <fieldset id="fildsetChidInfo" class="hidden">
                <legend>Information about all your children</legend>
                <div class="pro_form_group">
                  <!-- --name_of_child-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label">
                      <label for="name_of_child1">Name of Child:(Last,First,Middle)</label>
                    </div>
                    <div class="pro_input">
                      <input
                        type="text"
                        name="name_of_child1"
                        id="name_of_child1" />
                    </div>
                  </div>
                  <!-- --child_citizenship-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label">
                      <label for="child_citizenship1">Child's Citizenship of What Country</label>
                    </div>
                    <div class="pro_input">
                      <input
                        type="date"
                        name="child_citizenship1"
                        id="child_citizenship1" />
                    </div>
                  </div>
                  <!-- --child_current_address-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label">
                      <label for="child_current_address1">Child's Current Address:(City and Country)</label>
                    </div>
                    <div class="pro_input">
                      <input
                        type="text"
                        name="child_current_address1"
                        id="child_current_address1" />
                    </div>
                  </div>
                  <!-- --child_immigration_status-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label">
                      <label for="child_immigration_status1">Immigration Status of child</label>
                    </div>
                    <div class="pro_input">
                      <input
                        type="text"
                        name="child_immigration_status1"
                        id="child_immigration_status1" />
                    </div>
                  </div>
                  <!-- --child_alien_registration_number-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label">
                      <label for="child_alien_registration_number1">Child's Alien Registration Number</label>
                    </div>
                    <div class="pro_input">
                      <input
                        type="text"
                        name="child_alien_registration_number1"
                        id="child_alien_registration_number1" />
                    </div>
                  </div>
                  <!-- --child_birth_date-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label">
                      <label for="child_birth_date1">Child's Birth Date:(Month,Day,Year)</label>
                    </div>
                    <div class="pro_input">
                      <input
                        type="date"
                        name="child_birth_date1"
                        id="child_birth_date1" />
                    </div>
                  </div>
                  <!-- --child_country_of_birth-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label">
                      <label for="child_country_of_birth1">Child's Country of Birth:(City and Country)</label>
                    </div>
                    <div class="pro_input">
                      <input
                        type="date"
                        name="child_country_of_birth1"
                        id="child_country_of_birth1" />
                    </div>
                  </div>
                  <!-- --child_average_earnings-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label">
                      <label for="child_average_earnings1">Child's Average Earnings Per Week: $</label>
                    </div>
                    <div class="pro_input">
                      <input
                        type="date"
                        name="child_average_earnings1"
                        id="child_average_earnings1" />
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>

          <div class="pahasebtnBox">
            <button class="stepBtn" onclick="handlePreviousBtn(phase6,phase7)">&lt; Previous</button>
            <button class="stepBtn" id="nextBtn7" onclick="handlePhase7button()">next &gt;</button>
          </div>
        </section>
        <!-- ======INFORMATION ABOUT WHERE YOU LIVED SINCE BEING IN THE US====== -->
        <section id="phase8" class="pro_form_phase hidden">
          <h2>INFORMATION ABOUT WHERE YOU LIVED SINCE BEING IN THE US</h2>
          <div class="phaseEightContent phaseContent">

            <p>Part 1 ,Number 16 - Place Where Lived Since Being In US</p>
            <br>

            <div class="pro_from_group_wraper">
              <div class="pro_form_group">
                <!-- --street_and_number-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="street_and_number">Street and Number - Apt.or Room # - City or
                      Town-State-Zip Code</label>
                  </div>
                  <div class="pro_input">
                    <input
                      type="text"
                      name="street_and_number"
                      id="street_and_number" />
                  </div>
                </div>
                <!-- --resided_from-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="resided_from">Resided From:(Month,Day,Year)</label>
                  </div>
                  <div class="pro_input">
                    <input type="date" name="resided_from" id="resided_from" />
                  </div>
                </div>
                <!-- --resided_to-- -->
                <div class="pro_input_Row">
                  <div class="pro_label">
                    <label for="resided_to">Resided To:(Month,Day,Year)</label>
                  </div>
                  <div class="pro_input">
                    <input type="date" name="resided_to" id="resided_to" />
                  </div>
                </div>
                <button class="addMore" onclick="handleHiddenToogle(fildset_about_lived_1)">Add More <b>+</b> </button>
              </div>
            </div>
          </div>

          <fieldset id="fildset_about_lived_1" class="hidden">
            <legend>Place Where Lived Since Being In US</legend>
            <div class="pro_form_group">
              <!-- --street_and_number1-- -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="street_and_number1">Street and Number - Apt.or Room # - City or
                    Town-State-Zip Code</label>
                </div>
                <div class="pro_input">
                  <input
                    type="text"
                    name="street_and_number1"
                    id="street_and_number1" />
                </div>
              </div>
              <!-- --resided_from1-- -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="resided_from1">Resided From:(Month,Day,Year)</label>
                </div>
                <div class="pro_input">
                  <input
                    type="date"
                    name="resided_from1"
                    id="resided_from1" />
                </div>
              </div>
              <!-- --resided_to1-- -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="resided_to1">Resided To:(Month,Day,Year)</label>
                </div>
                <div class="pro_input">
                  <input
                    type="text"
                    name="resided_to1"
                    id="resided_to1" />
                </div>
              </div>
              <button class="addMore" onclick="handleHiddenToogle(fildset_about_lived_2)">Add More <b>+</b> </button>
            </div>
          </fieldset>
          <br>
          <fieldset id="fildset_about_lived_2" class="hidden">
            <legend>Place Where Lived Since Being In US</legend>
            <div class="pro_form_group">
              <!-- --street_and_number1-- -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="street_and_number2">Street and Number - Apt.or Room # - City or
                    Town-State-Zip Code</label>
                </div>
                <div class="pro_input">
                  <input
                    type="text"
                    name="street_and_number2"
                    id="street_and_number2" />
                </div>
              </div>
              <!-- --resided_from1-- -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="resided_from2">Resided From:(Month,Day,Year)</label>
                </div>
                <div class="pro_input">
                  <input
                    type="date"
                    name="resided_from2"
                    id="resided_from2" />
                </div>
              </div>
              <!-- --resided_to1-- -->
              <div class="pro_input_Row">
                <div class="pro_label">
                  <label for="resided_to2">Resided To:(Month,Day,Year)</label>
                </div>
                <div class="pro_input">
                  <input
                    type="text"
                    name="resided_to2"
                    id="resided_to2" />
                </div>
              </div>
            </div>
          </fieldset>

          <div class="pahasebtnBox">
            <button class="stepBtn" onclick="handlePreviousBtn(phase7,phase8)"> &lt; Previous</button>
            <button class="stepBtn" id="nextBtn8" onclick="handlePhase8Button()">next &gt;</button>
          </div>
        </section>
        <!-- =======EMPLOYMENT INFORMATION FOR LAST TEN YEARS======== -->
        <section id="phase9" class="pro_form_phase hidden">
          <h2>EMPLOYMENT INFORMATION FOR LAST 10 YEARS</h2>
          <!-- <div class="hidden">
                 <div class="pro_table">
                   <table id="imployment_information_table">
                     <tr>
                       <td>Full NAme of Employer:</td>
                       <td>Full Address of Employer</td>
                       <td>Earning Per Week:(Aproximate)</td>
                       <td>Type of Work Preformed</td>
                       <td>Start of Employment:(Month,Day,Year)</td>
                       <td>End of Employment:(Month,Day,Year)</td>
                     </tr>
                     <tr>
                       <td><input type="text" name="full_name_of_employer" /></td>
                       <td><input type="text" name="full_address_of_employer" /></td>
                       <td><input type="text" name="earning_per_week" /></td>
                       <td><input type="text" name="type_of_work_preformed" /></td>
                       <td><input type="text" name="start_of_employment" /></td>
                       <td><input type="text" name="end_of_employment" /></td>
                     </tr>
                     <tr>
                       <td><input type="text" name="full_name_of_employer" /></td>
                       <td><input type="text" name="full_address_of_employer" /></td>
                       <td><input type="text" name="earning_per_week" /></td>
                       <td><input type="text" name="type_of_work_preformed" /></td>
                       <td><input type="text" name="start_of_employment" /></td>
                       <td><input type="text" name="end_of_employment" /></td>
                     </tr>
                     <tr>
                       <td><input type="text" name="full_name_of_employer" /></td>
                       <td><input type="text" name="full_address_of_employer" /></td>
                       <td><input type="text" name="earning_per_week" /></td>
                       <td><input type="text" name="type_of_work_preformed" /></td>
                       <td><input type="text" name="start_of_employment" /></td>
                       <td><input type="text" name="end_of_employment" /></td>
                     </tr>
                     <tr>
                       <td><input type="text" name="full_name_of_employer" /></td>
                       <td><input type="text" name="full_address_of_employer" /></td>
                       <td><input type="text" name="earning_per_week" /></td>
                       <td><input type="text" name="type_of_work_preformed" /></td>
                       <td><input type="text" name="start_of_employment" /></td>
                       <td><input type="text" name="end_of_employment" /></td>
                     </tr>
                     <tr>
                       <td><input type="text" name="full_name_of_employer" /></td>
                       <td><input type="text" name="full_address_of_employer" /></td>
                       <td><input type="text" name="earning_per_week" /></td>
                       <td><input type="text" name="type_of_work_preformed" /></td>
                       <td><input type="text" name="start_of_employment" /></td>
                       <td><input type="text" name="end_of_employment" /></td>
                     </tr>
                     <tr>
                       <td><input type="text" name="full_name_of_employer" /></td>
                       <td><input type="text" name="full_address_of_employer" /></td>
                       <td><input type="text" name="earning_per_week" /></td>
                       <td><input type="text" name="type_of_work_preformed" /></td>
                       <td><input type="text" name="start_of_employment" /></td>
                       <td><input type="text" name="end_of_employment" /></td>
                     </tr>
                     <tr>
                       <td><input type="text" name="full_name_of_employer" /></td>
                       <td><input type="text" name="full_address_of_employer" /></td>
                       <td><input type="text" name="earning_per_week" /></td>
                       <td><input type="text" name="type_of_work_preformed" /></td>
                       <td><input type="text" name="start_of_employment" /></td>
                       <td><input type="text" name="end_of_employment" /></td>
                     </tr>
                     <tr>
                       <td><input type="text" name="full_name_of_employer" /></td>
                       <td><input type="text" name="full_address_of_employer" /></td>
                       <td><input type="text" name="earning_per_week" /></td>
                       <td><input type="text" name="type_of_work_preformed" /></td>
                       <td><input type="text" name="start_of_employment" /></td>
                       <td><input type="text" name="end_of_employment" /></td>
                     </tr>
                     <tr>
                       <td><input type="text" name="full_name_of_employer" /></td>
                       <td><input type="text" name="full_address_of_employer" /></td>
                       <td><input type="text" name="earning_per_week" /></td>
                       <td><input type="text" name="type_of_work_preformed" /></td>
                       <td><input type="text" name="start_of_employment" /></td>
                       <td><input type="text" name="end_of_employment" /></td>
                     </tr>
                   </table>
                 </div>
               </div> -->

          <div class="phaseNineContent phaseContent">

            <p>
              Information about your emplymewnt form the first time you entered
              the US
            </p>
            <div class="pro_from_group_wraper">

              <div class="pro_form_group">
                <!-- --full_name_of_employer-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="full_name_of_employer">Full Name of Employer:</label></div>
                  <div class="pro_input"> <input type="text" name="full_name_of_employer" id="full_name_of_employer" /></div>
                </div>
                <!-- --full_address_of_employer-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="full_address_of_employer">Full Address of Employer</label></div>
                  <div class="pro_input"> <input type="text" name="full_address_of_employer" id="full_address_of_employer" /></div>
                </div>
                <!-- --earning_per_week-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="earning_per_week">Earning Per Week:(Aproximate)</label></div>
                  <div class="pro_input"> <input type="text" name="earning_per_week" id="earning_per_week" /></div>
                </div>
                <!-- --type_of_work_preformed-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="type_of_work_preformed">Type of Work Preformed</label></div>
                  <div class="pro_input"> <input type="text" name="type_of_work_preformed" id="type_of_work_preformed" /></div>
                </div>
                <!-- --start_of_employment_last_10_years-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="start_of_employment_last_10_years">Start of Employment:(Month,Day,Year)</label></div>
                  <div class="pro_input"> <input type="text" name="start_of_employment_last_10_years" id="start_of_employment_last_10_years" /></div>
                </div>
                <!-- --end_of_employment_last_10_years-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="end_of_employment_last_10_years">End of Employment:(Month,Day,Year)</label></div>
                  <div class="pro_input"> <input type="text" name="end_of_employment_last_10_years" id="end_of_employment_last_10_years" /></div>
                </div>
                <button class="addMore" onclick="handleHiddenToogle(fildset1)">Add More <b>+</b></button>
              </div>
              <br>
              <fieldset id="fildset1" class="hidden">
                <legend>Information of Emloyment</legend>
                <div class="pro_form_group">
                  <!-- --full_name_of_employer1-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label"><label for="full_name_of_employer1">Full Name of Employer:</label></div>
                    <div class="pro_input"> <input type="text" name="full_name_of_employer1" id="full_name_of_employer1" /></div>
                  </div>
                  <!-- --full_address_of_employer1-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label"><label for="full_address_of_employer1">Full Address of Employer</label></div>
                    <div class="pro_input"> <input type="text" name="full_address_of_employer1" id="full_address_of_employer1" /></div>
                  </div>
                  <!-- --earning_per_week1-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label"><label for="earning_per_week1">Earning Per Week:(Aproximate)</label></div>
                    <div class="pro_input"> <input type="text" name="earning_per_week1" id="earning_per_week1" /></div>
                  </div>
                  <!-- --type_of_work_preformed1-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label"><label for="type_of_work_preformed1">Type of Work Preformed</label></div>
                    <div class="pro_input"> <input type="text" name="type_of_work_preformed1" id="type_of_work_preformed1" /></div>
                  </div>
                  <!-- --start_of_employment_last_10_years1-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label"><label for="start_of_employment_last_10_years1">Start of Employment:(Month,Day,Year)</label></div>
                    <div class="pro_input"> <input type="text" name="start_of_employment_last_10_years1" id="start_of_employment_last_10_years1" /></div>
                  </div>
                  <!-- --end_of_employment_last_10_years-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label"><label for="end_of_employment_last_10_years1">End of Employment:(Month,Day,Year)</label></div>
                    <div class="pro_input"> <input type="text" name="end_of_employment_last_10_years1" id="end_of_employment_last_10_years1" /></div>
                  </div>
                  <button class="addMore" onclick="handleHiddenToogle(fildset2)">Add More <b>+</b></button>
                </div>
              </fieldset>
              <br>
              <fieldset id="fildset2" class="hidden">
                <legend>nformation of Emloyment</legend>
                <div class="pro_form_group">
                  <!-- --full_name_of_employer2-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label"><label for="full_name_of_employer2">Full Name of Employer:</label></div>
                    <div class="pro_input"> <input type="text" name="full_name_of_employer2" id="full_name_of_employer2" /></div>
                  </div>
                  <!-- --full_address_of_employer2-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label"><label for="full_address_of_employer2">Full Address of Employer</label></div>
                    <div class="pro_input"> <input type="text" name="full_address_of_employer2" id="full_address_of_employer2" /></div>
                  </div>
                  <!-- --earning_per_week2-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label"><label for="earning_per_week2">Earning Per Week:(Aproximate)</label></div>
                    <div class="pro_input"> <input type="text" name="earning_per_week2" id="earning_per_week2" /></div>
                  </div>
                  <!-- --type_of_work_preformed1-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label"><label for="type_of_work_preformed2">Type of Work Preformed</label></div>
                    <div class="pro_input"> <input type="text" name="type_of_work_preformed2" id="type_of_work_preformed2" /></div>
                  </div>
                  <!-- --start_of_employment_last_10_years1-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label"><label for="start_of_employment_last_10_years2">Start of Employment:(Month,Day,Year)</label></div>
                    <div class="pro_input"> <input type="text" name="start_of_employment_last_10_years2" id="start_of_employment_last_10_years2" /></div>
                  </div>
                  <!-- --end_of_employment_last_10_years-- -->
                  <div class="pro_input_Row">
                    <div class="pro_label"><label for="end_of_employment_last_10_years2">End of Employment:(Month,Day,Year)</label></div>
                    <div class="pro_input"> <input type="text" name="end_of_employment_last_10_years2" id="end_of_employment_last_10_years2" /></div>
                  </div>
                  <button class="addMore">Add More <b>+</b></button>
                </div>
              </fieldset>

            </div>
          </div>
          <div class="pahasebtnBox">
            <button class="stepBtn" onclick="handlePreviousBtn(phase8,phase9)">&lt; Previous</button>
            <button class="stepBtn" id="nextBtn9" onclick="handlePhase9Button()">next &gt;</button>
          </div>
        </section>
        <!-- ======INFORMATION ABOUT YOUR FAMILY :========== -->
        <section id="phase10" class="pro_form_phase hidden">
          <h2>INFORMATION ABOUT YOUR FAMILY :</h2>
          <div class="phaseTenContent phaseContent">
            <p>
              Information on your father, mother, brother , sister, aunt, uncle,
              grandfather, grandmother:
            </p>
            <div class="pro_from_group_wraper">
              <h3 class="family_title pro_h3">FATHER</h3>
              <div class="pro_form_group">
                <!-- --father_name-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="father_name">father_name</label></div>
                  <div class="pro_input"><input type="text" id="father_name" name="father_name" required /></div>
                </div>
                <!-- --father_cityzen_of_what_country-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="father_cityzen_of_what_country">Cityzen of what Country</label></div>
                  <div class="pro_input"><input type="text" id="father_cityzen_of_what_country" name="father_cityzen_of_what_country" required /></div>
                </div>
                <!-- --father_relationship_to_me-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="father_relationship_to_me">Relationship to me</label></div>
                  <div class="pro_input"><input type="text" id="father_relationship_to_me" name="father_relationship_to_me" required /></div>
                </div>
                <!-- --father_imigration_status-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="father_imigration_status">imigration status</label></div>
                  <div class="pro_input"><input type="text" id="father_imigration_status" name="father_imigration_status" required /></div>
                </div>
                <!-- --father_alien_registration_number-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="father_alien_registration_number">Father's Alien Registration Number</label></div>
                  <div class="pro_input"><input type="text" id="father_alien_registration_number" name="father_alien_registration_number" required /></div>
                </div>
                <!-- --father_birth_date-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="father_birth_date">Father's Birth Date:(Month,Day,Year)</label></div>
                  <div class="pro_input"><input type="date" id="father_birth_date" name="father_birth_date" required /></div>
                </div>
                <!-- --father_birth_date-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="father_birth_country">Father's Birth Country</label></div>
                  <div class="pro_input"><input type="text" id="father_birth_country" name="father_birth_country" required /></div>
                </div>


              </div>
              <h3 class="pro_h3">MOTHER</h3>
              <div class="pro_form_group">
                <!-- --mother_name-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="mother_name">Name</label></div>
                  <div class="pro_input"><input type="text" id="mother_name" name="mother_name" required /></div>
                </div>
                <!-- --mother_relationship_to_me-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="mother_relationship_to_me">Relationship to me</label></div>
                  <div class="pro_input"><input type="text" id="mother_relationship_to_me" name="mother_relationship_to_me" required /></div>
                </div>
                <!-- --mother_cityzen_of_what_country-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="mother_cityzen_of_what_country">Cityzen of what Country</label></div>
                  <div class="pro_input"><input type="text" id="mother_cityzen_of_what_country" name="mother_cityzen_of_what_country" required /></div>
                </div>
                <!-- --mother_imigration_status-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="mother_imigration_status">imigration status</label></div>
                  <div class="pro_input"><input type="text" id="mother_imigration_status" name="mother_imigration_status" required /></div>
                </div>
                <!-- --mother_alien_registration_number-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="mother_alien_registration_number">Mother's Alien Registration Number</label></div>
                  <div class="pro_input"><input type="text" id="mother_alien_registration_number" name="mother_alien_registration_number" required /></div>
                </div>
                <!-- --mother_birth_date-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="mother_birth_date">Mother's Birth Date:(Month,Day,Year)</label></div>
                  <div class="pro_input"><input type="date" id="mother_birth_date" name="mother_birth_date" required /></div>
                </div>
                <!-- --mother_birth_country-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="mother_birth_country">Mother's Birth Country</label></div>
                  <div class="pro_input"><input type="text" id="mother_birth_country" name="mother_birth_country" required /></div>
                </div>

              </div>
              <h3 class="pro_h3">GRANDFATHER ON FATHER'S SIDE:</h3>
              <div class="pro_form_group">
                <!-- --grandfather_name-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandfather_name">Name</label></div>
                  <div class="pro_input"><input type="text" id="grandfather_name" name="grandfather_name" required /></div>
                </div>
                <!-- --grandfather_cityzen_of_what_country-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandfather_cityzen_of_what_country">Cityzen of what Country</label></div>
                  <div class="pro_input"><input type="text" id="grandfather_cityzen_of_what_country" name="grandfather_cityzen_of_what_country" required /></div>
                </div>
                <!-- --grandfather_relationship_to_me-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandfather_relationship_to_me">Grandfather Relationship To Me</label></div>
                  <div class="pro_input"><input type="text" id="grandfather_relationship_to_me" name="grandfather_relationship_to_me" required /></div>
                </div>
                <!-- --grandfather_imigration_status-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandfather_imigration_status">imigration status</label></div>
                  <div class="pro_input"><input type="text" id="grandfather_imigration_status" name="grandfather_imigration_status" required /></div>
                </div>
                <!-- --grandfather_alien_registration_number-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandfather_alien_registration_number">Grandfather's Alien Registration Number</label></div>
                  <div class="pro_input"><input type="text" id="grandfather_alien_registration_number" name="grandfather_alien_registration_number" required /></div>
                </div>
                <!-- --grandfather_birth_date-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandfather_birth_date">Grandfather's Birth Date:(Month,Day,Year)</label></div>
                  <div class="pro_input"><input type="date" id="grandfather_birth_date" name="grandfather_birth_date" required /></div>
                </div>
                <!-- --grandfather_birth_country-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandfather_birth_country">Grandfather's Birth Country</label></div>
                  <div class="pro_input"><input type="text" id="grandfather_birth_country" name="grandfather_birth_country" required /></div>
                </div>


              </div>
              <h3 class="pro_h3">GRANDMOTHER ON FATHER'S SIDE</h3>
              <div class="pro_form_group">
                <!-- --grandmother_name-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandmother_name">Name</label></div>
                  <div class="pro_input"><input type="text" id="grandmother_name" name="grandmother_name" required /></div>
                </div>
                <!-- --grandmother_cityzen_of_what_country-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandmother_cityzen_of_what_country">Cityzen of what Country</label></div>
                  <div class="pro_input"><input type="text" id="grandmother_cityzen_of_what_country" name="grandmother_cityzen_of_what_country" required /></div>
                </div>
                <!-- --grandmother_relationship_to_me-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandmother_relationship_to_me">Grandmother Relationship To Me </label></div>
                  <div class="pro_input"><input type="text" id="grandmother_relationship_to_me" name="grandmother_relationship_to_me" required /></div>
                </div>
                <!-- --grandmother_imigration_status-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandmother_imigration_status">imigration status</label></div>
                  <div class="pro_input"><input type="text" id="grandmother_imigration_status" name="grandmother_imigration_status" required /></div>
                </div>
                <!-- --grandmother_alien_registration_number-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandmother_alien_registration_number">Grandmother's Alien Registration Number</label></div>
                  <div class="pro_input"><input type="text" id="grandmother_alien_registration_number" name="grandmother_alien_registration_number" required /></div>
                </div>
                <!-- --grandmother_birth_date-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandmother_birth_date">Grandmother's Birth Date:(Month,Day,Year)</label></div>
                  <div class="pro_input"><input type="date" id="grandmother_birth_date" name="grandmother_birth_date" required /></div>
                </div>
                <!-- --grandmother_birth_country-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandmother_birth_country">Grandmother's Birth Country</label></div>
                  <div class="pro_input"><input type="text" id="grandmother_birth_country" name="grandmother_birth_country" required /></div>
                </div>

              </div>
              <h3 class="pro_h3">GRANDFATHER ON MOTHER'S SIDE:</h3>
              <div class="pro_form_group">
                <!-- --grandfather_name_mother_side-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandfather_name_mother_side">Name</label></div>
                  <div class="pro_input"><input type="text" id="grandfather_name_mother_side" name="grandfather_name_mother_side" required /></div>
                </div>
                <!-- --grandfather_cityzen_of_what_country_mother_side-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandfather_cityzen_of_what_country_mother_side">Cityzen of what Country</label></div>
                  <div class="pro_input"><input type="text" id="grandfather_cityzen_of_what_country_mother_side" name="grandfather_cityzen_of_what_country_mother_side" required /></div>
                </div>
                <!-- --grandfather_relationship_to_me_mother_side-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandfather_relationship_to_me_mother_side">Relationship to me</label></div>
                  <div class="pro_input"><input type="text" id="grandfather_relationship_to_me_mother_side" name="grandfather_relationship_to_me_mother_side" required /></div>
                </div>
                <!-- --grandfather_imigration_status_mother_side-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandfather_imigration_status_mother_side">imigration status</label></div>
                  <div class="pro_input"><input type="text" id="grandfather_imigration_status_mother_side" name="grandfather_imigration_status_mother_side" required /></div>
                </div>
                <!-- --grandfather_alien_registration_number_mother_side-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandfather_alien_registration_number_mother_side">Grandfather's Alien Registration Number</label></div>
                  <div class="pro_input"><input type="text" id="grandfather_alien_registration_number_mother_side" name="grandfather_alien_registration_number_mother_side" required /></div>
                </div>
                <!-- --grandfather_birth_date_mother_side-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandfather_birth_date_mother_side">Grandfather's Birth Date:(Month,Day,Year)</label></div>
                  <div class="pro_input"><input type="date" id="grandfather_birth_date_mother_side" name="grandfather_birth_date_mother_side" required /></div>
                </div>
                <!-- --grandfather_birth_country_mother_side-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandfather_birth_country_mother_side">Grandfather's Birth Country</label></div>
                  <div class="pro_input"><input type="text" id="grandfather_birth_country_mother_side" name="grandfather_birth_country_mother_side" required /></div>
                </div>

              </div>
              <h3 class="pro_h3">GRANDMOTHER ON MOTHER'S SIDE</h3>
              <div class="pro_form_group">
                <!-- --grandmother_name_mother_side-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandmother_name_mother_side">Name</label></div>
                  <div class="pro_input"><input type="text" id="grandmother_name_mother_side" name="grandmother_name_mother_side" required /></div>
                </div>
                <!-- --grandmother_cityzen_of_what_country_mother_side-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandmother_cityzen_of_what_country_mother_side">Cityzen of what Country</label></div>
                  <div class="pro_input"><input type="text" id="grandmother_cityzen_of_what_country_mother_side" name="grandmother_cityzen_of_what_country_mother_side" required /></div>
                </div>
                <!-- --grandmother_relationship_to_me_mother_side-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandmother_relationship_to_me_mother_side">Relationship to me</label></div>
                  <div class="pro_input"><input type="text" id="grandmother_relationship_to_me_mother_side" name="grandmother_relationship_to_me_mother_side" required /></div>
                </div>
                <!-- --grandmother_imigration_status_mother_side-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandmother_imigration_status_mother_side">imigration status</label></div>
                  <div class="pro_input"><input type="text" id="grandmother_imigration_status_mother_side" name="grandmother_imigration_status_mother_side" required /></div>
                </div>
                <!-- --grandmother_alien_registration_number_mother_side-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandmother_alien_registration_number_mother_side">Grandmother's Alien Registration Number</label></div>
                  <div class="pro_input"><input type="text" id="grandmother_alien_registration_number_mother_side" name="grandmother_alien_registration_number_mother_side" required /></div>
                </div>
                <!-- --grandmother_birth_date_mother_side-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandmother_birth_date_mother_side">Grandmother's Birth Date:(Month,Day,Year)</label></div>
                  <div class="pro_input"><input type="date" id="grandmother_birth_date_mother_side" name="grandmother_birth_date_mother_side" required /></div>
                </div>
                <!-- --grandmother_birth_country_mother_side-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="grandmother_birth_country_mother_side">Grandmother's Birth Country</label></div>
                  <div class="pro_input"><input type="text" id="grandmother_birth_country_mother_side" name="grandmother_birth_country_mother_side" required /></div>
                </div>

              </div>
              <h3 class="pro_h3">BROTHERS</h3>
              <div class="pro_form_group">
                <!-- --brother_name-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="brother_name">Name</label></div>
                  <div class="pro_input"><input type="text" id="brother_name" name="brother_name" required /></div>
                </div>
                <!-- --brother_cityzen_of_what_country-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="brother_cityzen_of_what_country">Cityzen of what Country</label></div>
                  <div class="pro_input"><input type="text" id="brother_cityzen_of_what_country" name="brother_cityzen_of_what_country" required /></div>
                </div>
                <!-- --brother_relationship_to_me-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="brother_relationship_to_me">Relationship to me</label></div>
                  <div class="pro_input"><input type="text" id="brother_relationship_to_me" name="brother_relationship_to_me" required /></div>
                </div>
                <!-- --brother_imigration_status-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="brother_imigration_status">imigration status</label></div>
                  <div class="pro_input"><input type="text" id="brother_imigration_status" name="brother_imigration_status" required /></div>
                </div>
                <!-- --brother_alien_registration_number-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="brother_alien_registration_number">Brother's Alien Registration Number</label></div>
                  <div class="pro_input"><input type="text" id="brother_alien_registration_number" name="brother_alien_registration_number" required /></div>
                </div>
                <!-- --brother_birth_date-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="brother_birth_date">Brother's Birth Date:(Month,Day,Year)</label></div>
                  <div class="pro_input"><input type="date" id="brother_birth_date" name="brother_birth_date" required /></div>
                </div>
                <!-- --brother_birth_country-- -->
                <div class="pro_input_Row">
                  <div class="pro_label"><label for="brother_birth_country">Brother's Birth Country</label></div>
                  <div class="pro_input"><input type="text" id="brother_birth_country" name="brother_birth_country" required /></div>
                </div>

              </div>



            </div>
          </div>
          <div class="pahasebtnBox">
            <button class="stepBtn" onclick="handlePreviousBtn(phase9,phase10)">&lt; Previous</button>
            <button class="submitBtn" onclick="handleSubmit()" id="nextBtnSubmit">Submit</button>
          </div>
          <div id="register-message"></div>



        </section>
      </form>
      <!-- *******form end here************ -->
      <div class="pro_container" id="form_footer">
        <div class="footnote">
          <p class="form_footer_heading">
            © Copyright 2013-2025, CitizenPath, LLC. All rights reserved. Version
            2.21.0
          </p>
          <p><small>CitizenPath is a private company that provides self-directed
              immigration services at your direction. We are not affiliated with
              USCIS or any government agency. The information provided in this site
              is not legal advice, but general information on issues commonly
              encountered in immigration. CitizenPath is not a law firm and is not a
              substitute for an attorney or law firm. Your access to and use of this
              site is subject to additional Terms of Use.</small></p>
        </div>
      </div>
    </div>
    <br />
    <br />
    <div class="pro_container">
      <div class="formdatapdf">
        <div id="show_form_data"></div>
        <button id="downloadPDF">Download PDF</button>
      </div>
    </div>
    <br />
    <br />
  </div>
</div>

<?php
get_footer();

?>