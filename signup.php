<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create Account | Jasons</title>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
	<div style="height: 2px; width: 100%;" class="btn-danger"></div>
    <div class="page-wrapper p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <label class="label-sec">Already Have an Account? <a href="index.php">Login Here</a></label>
                <div class="card-body">
                	<p style="color: red; text-align: center;">
			  <?php
				if (isset($_GET['status'])) {
				    $errorCode = htmlspecialchars($_GET['status']); // Sanitize input
				    switch ($errorCode) {
				        case 'stmtfailed':
				            echo '<p style="color: red; text-align: center;">An unexpected error occurred!</p>';
				            break;
				        case 'emptyInput':
				            echo '<p style="color: red; text-align: center;">All fields with * are required!</p>';
				            break;
				        case 'invalidEmail':
				            echo '<p style="color: red; text-align: center;">Invalid Email</p>';
				            break; 
				        case 'passwordmatch':
				            echo '<p style="color: red; text-align: center;">Make sure Password And Confirm Password are the same</p>';
				            break; 
				        case 'useroremailtaken':
				            echo '<p style="color: red; text-align: center;">Email Taken</p>';
				            break; 
				        default:
				            // Log unrecognized error codes for debugging
				            error_log("Unrecognized error code: $errorCode");
				            echo '<p style="color: red; text-align: center;">An unexpected error occurred! Please try again later.</p>';
				            break;
				    }
				} else {
				    echo '<p style="color: red; text-align: center;">Kindly fill in your details correctly!</p>';
				}
				?>

		</p>
                    <h2 class="title">Membership Registration Form </h2>

                    <form method="POST" action="includes/register.inc.php" enctype="multipart/form-data">
                    	<div class="input-group">
    
                                <div class="input-group">
                                    <label class="label">Profile ID</label>
                                     <input class="trans-input" type="file" id="myFile" name="avatar_add">
                                </div>
                            </div>

                        <div class="row row-space">
                        </div>
                        <label class="label">Name<i></i></label>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label2">first name <i>*</i></label>
                                    <input class="input--style-4" type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label2">last name <i>*</i></label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div>                                         
                        </div>
                        
                          <div class="row row-space">
                         <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender <i>*</i></label>
                                    <div class="p-t-10">
                                       <select name="gender">
                                       		<option>Male</option>
                                       		<option>Female</option>
                                       </select>
                                    </div>
                                </div>
                            </div>

                             <div class="col-2">
                                <div class="input-group">
                            <label class="label combo">Marital Status <i>*</i></label>
                            <div class="rs-select2  js-select-simple select--no-search">
                                <select name="marital_status">
                                    <option disabled="disabled" selected="selected">Choose Option</option>
                                    <option>Single</option>
                                    <option>Married</option>
                                    <option>Widowed</option>
                                  
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                            </div>

                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email <i>*</i></label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number <i>*</i></label>
                                    <input class="input--style-4" type="text" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birth Date <i>*</i></label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="date" name="birthday">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                               
                            </div>
                        </div>       
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label2">Street Address.<i>*</i></label>
                                    <input class="input--style-4" type="text" name="street_address">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label2">Address Line 2</label>
                                    <input class="input--style-4" type="text" name="street_address_2">
                                </div>
                            </div>
                        </div>

                            <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label2">City <i>*</i></label>
                                    <input class="input--style-4" type="text" name="city">
                                </div>
                            </div>
                            
                        </div>


                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">State / Province / Region <i>*</i></label>
                                    <input class="input--style-4" type="text" name="region">
                                </div>
                            </div>
                            <div class="col-2">
                                 <div class="input-group">
                                    <label class="label">Postal / Zip Code <i>*</i></label>
                                    <input class="input--style-4" type="text" name="zip">
                                </div>
                            </div>
                             <div class="col-2">
                                 <div class="input-group">
                                    <label class="label">Select a Country <i>*</i></label>
                                   <select id="countrySelect" name="country">
									  <option value="">Select Country</option>
									  <option value="AF">Afghanistan</option>
									  <option value="AX">Åland Islands</option>
									  <option value="AL">Albania</option>
									  <option value="DZ">Algeria</option>
									  <option value="AS">American Samoa</option>
									  <option value="AD">Andorra</option>
									  <option value="AO">Angola</option>
									  <option value="AI">Anguilla</option>
									  <option value="AQ">Antarctica</option>
									  <option value="AG">Antigua and Barbuda</option>
									  <option value="AR">Argentina</option>
									  <option value="AM">Armenia</option>
									  <option value="AW">Aruba</option>
									  <option value="AU">Australia</option>
									  <option value="AT">Austria</option>
									  <option value="AZ">Azerbaijan</option>
									  <option value="BS">Bahamas</option>
									  <option value="BH">Bahrain</option>
									  <option value="BD">Bangladesh</option>
									  <option value="BB">Barbados</option>
									  <option value="BY">Belarus</option>
									  <option value="BE">Belgium</option>
									  <option value="BZ">Belize</option>
									  <option value="BJ">Benin</option>
									  <option value="BM">Bermuda</option>
									  <option value="BT">Bhutan</option>
									  <option value="BO">Bolivia (Plurinational State of)</option>
									  <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
									  <option value="BA">Bosnia and Herzegovina</option>
									  <option value="BW">Botswana</option>
									  <option value="BV">Bouvet Island</option>
									  <option value="BR">Brazil</option>
									  <option value="IO">British Indian Ocean Territory</option>
									  <option value="BN">Brunei Darussalam</option>
									  <option value="BG">Bulgaria</option>
									  <option value="BF">Burkina Faso</option>
									  <option value="BI">Burundi</option>
									  <option value="CV">Cabo Verde</option>
									  <option value="KH">Cambodia</option>
									  <option value="CM">Cameroon</option>
									  <option value="CA">Canada</option>
									  <option value="KY">Cayman Islands</option>
									  <option value="CF">Central African Republic</option>
									  <option value="TD">Chad</option>
									  <option value="CL">Chile</option>
									  <option value="CN">China</option>
									  <option value="CX">Christmas Island</option>
									  <option value="CC">Cocos (Keeling) Islands</option>
									  <option value="CO">Colombia</option>
									  <option value="KM">Comoros</option>
									  <option value="CG">Congo</option>
									  <option value="CD">Congo (Democratic Republic of the)</option>
									  <option value="CK">Cook Islands</option>
									  <option value="CR">Costa Rica</option>
									  <option value="HR">Croatia</option>
									  <option value="CU">Cuba</option>
									  <option value="CW">Curaçao</option>
									  <option value="CY">Cyprus</option>
									  <option value="CZ">Czech Republic</option>
									  <option value="DK">Denmark</option>
									  <option value="DJ">Djibouti</option>
									  <option value="DM">Dominica</option>
									  <option value="DO">Dominican Republic</option>
									  <option value="EC">Ecuador</option>
									  <option value="EG">Egypt</option>
									  <option value="SV">El Salvador</option>
									  <option value="GQ">Equatorial Guinea</option>
									  <option value="ER">Eritrea</option>
									  <option value="EE">Estonia</option>
									  <option value="ET">Ethiopia</option>
									  <option value="FK">Falkland Islands (Malvinas)</option>
									  <option value="FO">Faroe Islands</option>
									  <option value="FJ">Fiji</option>
									  <option value="FI">Finland</option>
									  <option value="FR">France</option>
									  <option value="GF">French Guiana</option>
									  <option value="PF">French Polynesia</option>
									  <option value="TF">French Southern Territories</option>
									  <option value="GA">Gabon</option>
									  <option value="GM">Gambia</option>
									  <option value="GE">Georgia</option>
									  <option value="DE">Germany</option>
									  <option value="GH">Ghana</option>
									  <option value="GI">Gibraltar</option>
									  <option value="GR">Greece</option>
									  <option value="GL">Greenland</option>
									  <option value="GD">Grenada</option>
									  <option value="GP">Guadeloupe</option>
									  <option value="GU">Guam</option>
									  <option value="GT">Guatemala</option>
									  <option value="GG">Guernsey</option>
									  <option value="GN">Guinea</option>
									  <option value="GW">Guinea-Bissau</option>
									  <option value="GY">Guyana</option>
									  <option value="HT">Haiti</option>
									  <option value="HM">Heard Island and McDonald Islands</option>
									  <option value="VA">Holy See</option>
									  <option value="HN">Honduras</option>
									  <option value="HK">Hong Kong</option>
									  <option value="HU">Hungary</option>
									  <option value="IS">Iceland</option>
									  <option value="IN">India</option>
									  <option value="ID">Indonesia</option>
									  <option value="IR">Iran (Islamic Republic of)</option>
									  <option value="IQ">Iraq</option>
									  <option value="IE">Ireland</option>
									  <option value="IM">Isle of Man</option>
									  <option value="IL">Israel</option>
									  <option value="IT">Italy</option>
									  <option value="JM">Jamaica</option>
									  <option value="JP">Japan</option>
									  <option value="JE">Jersey</option>
									  <option value="JO">Jordan</option>
									  <option value="KZ">Kazakhstan</option>
									  <option value="KE">Kenya</option>
									  <option value="KI">Kiribati</option>
									  <option value="KP">Korea (Democratic People's Republic of)</option>
									  <option value="KR">Korea (Republic of)</option>
									  <option value="KW">Kuwait</option>
									  <option value="KG">Kyrgyzstan</option>
									  <option value="LA">Lao People's Democratic Republic</option>
									  <option value="LV">Latvia</option>
									  <option value="LB">Lebanon</option>
									  <option value="LS">Lesotho</option>
									  <option value="LR">Liberia</option>
									  <option value="LY">Libya</option>
									  <option value="LI">Liechtenstein</option>
									  <option value="LT">Lithuania</option>
									  <option value="LU">Luxembourg</option>
									  <option value="MO">Macao</option>
									  <option value="MK">Macedonia (the former Yugoslav Republic of)</option>
									  <option value="MG">Madagascar</option>
									  <option value="MW">Malawi</option>
									  <option value="MY">Malaysia</option>
									  <option value="MV">Maldives</option>
									  <option value="ML">Mali</option>
									  <option value="MT">Malta</option>
									  <option value="MH">Marshall Islands</option>
									  <option value="MQ">Martinique</option>
									  <option value="MR">Mauritania</option>
									  <option value="MU">Mauritius</option>
									  <option value="YT">Mayotte</option>
									  <option value="MX">Mexico</option>
									  <option value="FM">Micronesia (Federated States of)</option>
									  <option value="MD">Moldova (Republic of)</option>
									  <option value="MC">Monaco</option>
									  <option value="MN">Mongolia</option>
									  <option value="ME">Montenegro</option>
									  <option value="MS">Montserrat</option>
									  <option value="MA">Morocco</option>
									  <option value="MZ">Mozambique</option>
									  <option value="MM">Myanmar</option>
									  <option value="NA">Namibia</option>
									  <option value="NR">Nauru</option>
									  <option value="NP">Nepal</option>
									  <option value="NL">Netherlands</option>
									  <option value="NC">New Caledonia</option>
									  <option value="NZ">New Zealand</option>
									  <option value="NI">Nicaragua</option>
									  <option value="NE">Niger</option>
									  <option value="NG">Nigeria</option>
									  <option value="NU">Niue</option>
									  <option value="NF">Norfolk Island</option>
									  <option value="MP">Northern Mariana Islands</option>
									  <option value="NO">Norway</option>
									  <option value="OM">Oman</option>
									  <option value="PK">Pakistan</option>
									  <option value="PW">Palau</option>
									  <option value="PS">Palestine, State of</option>
									  <option value="PA">Panama</option>
									  <option value="PG">Papua New Guinea</option>
									  <option value="PY">Paraguay</option>
									  <option value="PE">Peru</option>
									  <option value="PH">Philippines</option>
									  <option value="PN">Pitcairn</option>
									  <option value="PL">Poland</option>
									  <option value="PT">Portugal</option>
									  <option value="PR">Puerto Rico</option>
									  <option value="QA">Qatar</option>
									  <option value="RE">Réunion</option>
									  <option value="RO">Romania</option>
									  <option value="RU">Russian Federation</option>
									  <option value="RW">Rwanda</option>
									  <option value="BL">Saint Barthélemy</option>
									  <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
									  <option value="KN">Saint Kitts and Nevis</option>
									  <option value="LC">Saint Lucia</option>
									  <option value="MF">Saint Martin (French part)</option>
									  <option value="PM">Saint Pierre and Miquelon</option>
									  <option value="VC">Saint Vincent and the Grenadines</option>
									  <option value="WS">Samoa</option>
									  <option value="SM">San Marino</option>
									  <option value="ST">Sao Tome and Principe</option>
									  <option value="SA">Saudi Arabia</option>
									  <option value="SN">Senegal</option>
									  <option value="RS">Serbia</option>
									  <option value="SC">Seychelles</option>
									  <option value="SL">Sierra Leone</option>
									  <option value="SG">Singapore</option>
									  <option value="SX">Sint Maarten (Dutch part)</option>
									  <option value="SK">Slovakia</option>
									  <option value="SI">Slovenia</option>
									  <option value="SB">Solomon Islands</option>
									  <option value="SO">Somalia</option>
									  <option value="ZA">South Africa</option>
									  <option value="GS">South Georgia and the South Sandwich Islands</option>
									  <option value="SS">South Sudan</option>
									  <option value="ES">Spain</option>
									  <option value="LK">Sri Lanka</option>
									  <option value="SD">Sudan</option>
									  <option value="SR">Suriname</option>
									  <option value="SJ">Svalbard and Jan Mayen</option>
									  <option value="SZ">Swaziland</option>
									  <option value="SE">Sweden</option>
									  <option value="CH">Switzerland</option>
									  <option value="SY">Syrian Arab Republic</option>
									  <option value="TW">Taiwan, Province of China</option>
									  <option value="TJ">Tajikistan</option>
									  <option value="TZ">Tanzania, United Republic of</option>
									  <option value="TH">Thailand</option>
									  <option value="TL">Timor-Leste</option>
									  <option value="TG">Togo</option>
									  <option value="TK">Tokelau</option>
									  <option value="TO">Tonga</option>
									  <option value="TT">Trinidad and Tobago</option>
									  <option value="TN">Tunisia</option>
									  <option value="TR">Turkey</option>
									  <option value="TM">Turkmenistan</option>
									  <option value="TC">Turks and Caicos Islands</option>
									  <option value="TV">Tuvalu</option>
									  <option value="UG">Uganda</option>
									  <option value="UA">Ukraine</option>
									  <option value="AE">United Arab Emirates</option>
									  <option value="GB">United Kingdom of Great Britain and Northern Ireland</option>
									  <option value="US">United States of America</option>
									  <option value="UM">United States Minor Outlying Islands</option>
									  <option value="UY">Uruguay</option>
									  <option value="UZ">Uzbekistan</option>
									  <option value="VU">Vanuatu</option>
									  <option value="VE">Venezuela (Bolivarian Republic of)</option>
									  <option value="VN">Viet Nam</option>
									  <option value="VG">Virgin Islands (British)</option>
									  <option value="VI">Virgin Islands (U.S.)</option>
									  <option value="WF">Wallis and Futuna</option>
									  <option value="EH">Western Sahara</option>
									  <option value="YE">Yemen</option>
									  <option value="ZM">Zambia</option>
									  <option value="ZW">Zimbabwe</option>
									</select>

                                </div>
                            </div>
                        </div>
</div>
<hr>		
                            <label class="label" style="font-weight: bold;">Academic Details <i>*</i></label>
                           <div class="col-3">
                                <div class="input-group-4">
             
                                    <label class="label">Highest Level of Education <i>*</i></label>
                                   <select  name="highest_level_of_edu">
                                   		<option>Tertiary</option>
                                   		<option>Secondary</option>
                                   		<option>Primary</option>
                                   </select>
                                </div>                            
                        </div>
<hr>
                             <label class="label" style="font-weight: bold;">First Degree<i>*</i></label>
                           <div class="col-2">
                                 <div class="input-group">
                                    <label class="label">Name of Institution <i>*</i></label>
                                    <input class="input--style-4" type="text" name="name_of_institution">
                                </div>   
                                <div class="input-group">
                                    <label class="label">Other Institution (If not available in the list above)</label>
                                    <input class="input--style-4" type="text" name="other_institute">
                                </div>   
                                <div class="input-group">
                                    <label class="label">Department <i>*</i></label>
                                    <input class="input--style-4" type="text" name="department">
                                </div>   
                                <div class="input-group">
                                    <label class="label">Qualification Obtained <i>*</i></label>
                                    <input class="input--style-4" type="text" name="qualification_obtained">
                                </div>
                                 <div class="input-group">
                                    <label class="label">Attach Qualification<i>*</i></label>
                                    <input class="input--style-4" type="file" name="attach_qualification_add">
                                </div>                             
                        </div>

                          
<hr>
                             <label class="label" style="font-weight: bold;">Second  Degree (Optional)</label>
                           <div class="col-2">
                                 <div class="input-group">
                                    <label class="label">Name of Institution <i>*</i></label>
                                    <input class="input--style-4" type="text" name="sec_name_of_institution">
                                </div>   
                                <div class="input-group">
                                    <label class="label">Other Institution (If not available in the list above) </label>
                                    <input class="input--style-4" type="text" name="sec_other_institute">
                                </div>   
                                <div class="input-group">
                                    <label class="label">Department </label>
                                    <input class="input--style-4" type="text" name="sec_department">
                                </div>   
                                <div class="input-group">
                                    <label class="label">Qualification Obtained</label>
                                    <input class="input--style-4" type="text" name="sec_qualification_obtained">
                                </div>
                                 <!-- <div class="input-group">
                                    <label class="label">Attach Qualification</label>
                                    <input class="input--style-4" type="file" name="sec_attach_qualification_add">
                                </div> -->                             
                        </div>
<hr>
                         <label class="label" style="font-weight: bold;">Other Qualification e.g. Certification</label>
                           <div class="col-2">
                                 <div class="input-group">
                                    <label class="label">Other Qualification 1</label>
                                    <input class="input--style-4" type="file" name="qua_1_add">
                                </div>     
                                 <div class="input-group">
                                    <label class="label">Other Qualification 2</label>
                                    <input class="input--style-4" type="file" name="qua_2_add">
                                </div>     
                                 <div class="input-group">
                                    <label class="label">Other Qualification 3</label>
                                    <input class="input--style-4" type="file" name="qua_3_add">
                                </div>                          
                        </div>
<hr>
                          <label class="label" style="font-weight: bold;">Job Details<i>*</i></label>
                           <div class="col-2">
                                 <div class="input-group">
                                    <label class="label">Profession
</label>
                                    <input class="input--style-4" type="text" name="job_pro">
                                </div>     
                                 <div class="input-group">
                                    <label class="label">Medical or Non Medical</label>
                                    <input class="input--style-4" type="text" name="med_non_med">
                                </div>     
                                 <div class="input-group">
                                    <label class="label">Employer</label>
                                    <input class="input--style-4" type="text" name="employer">
                                </div>       
                                <div class="input-group">
                                    <label class="label">Your current region</label>
                                    <input class="input--style-4" type="text" name="job_region">
                                </div>                          
                        </div>

                        <div class="row row-space">
                         <div class="input-area">
                                <div class="input-group">
                                    <label class="label">Area of Service <i>*</i></label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Jasons Health Corps
                                            <input type="radio" checked="checked" value="Jasons Health Corps" name="ser_of_area">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Child Destiny Fund
                                            <input type="radio" value="Child Destiny Fund" name="ser_of_area">
                                            <span class="checkmark"></span>
                                        </label>
                                         <label class="radio-container m-r-45">Jasons Gifted Award
                                            <input type="radio" value="Jasons Gifted Award" checked="checked" name="ser_of_area">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Music
                                            <input type="radio" value="Music" name="ser_of_area">
                                            <span class="checkmark"></span>
                                        </label>                                      
                                    </div>
                                </div>
                                    <div class="input-group">
                                   
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">JChaste Ideal
                                            <input type="radio" value="JChaste Ideal" checked="checked" name="ser_of_area">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Jasons Hospitals
                                            <input type="radio" value="Jasons Hospitals" name="ser_of_area">
                                            <span class="checkmark"></span>
                                        </label>
                                         <label class="radio-container m-r-45">Patient Help Fund
                                            <input type="radio" value="Patient Help Fund" checked="checked" name="ser_of_area">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Editorial
                                            <input type="radio" value="Editorial" name="ser_of_area">
                                            <span class="checkmark"></span>
                                        </label>                                      
                                    </div>
                                </div>
                            </div>

</div>

      <div class="row row-space">
                         <div class="input-area">
                                <div class="input-group">
                                    <label class="label">Mode of Commitment <i>*</i></label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Field Mission
                                            <input type="radio" value="Field Mission" checked="checked" name="mode_of_com">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Consultancy
                                            <input type="radio" value="Consultancy" name="mode_of_com">
                                            <span class="checkmark"></span>
                                        </label>
                                         <label class="radio-container m-r-45">Prayer / Counseling
                                            <input type="radio" value="Prayer/Counseling" checked="checked" name="mode_of_com">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Financial / Materials
                                            <input type="radio" value="Financial/Materials" name="mode_of_com">
                                            <span class="checkmark"></span>
                                        </label>                                      
                                    </div>
                                </div>
                                    
                            </div>

</div>
                
<hr>
 					<div class="row row-space">
                         <div class="input-area">
                                <div class="input-group">
                                    <label class="label">Motivation </label>
                                    <textarea id="message" name="message" rows="4" cols="40"></textarea>                              
                            </div>
                        </div>

</div>
<hr>
                         <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Create Password <i>*</i></label>
                                    <input class="input--style-4" type="password" name="pass_word">
                                </div>
                            </div>
                        </div>
                        

                        <div class="p-t-15">
                            <button class="btn-btn " type="submit" name="submit">Submit</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


</body>
</html>