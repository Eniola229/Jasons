<?php
  session_start();
include "classes/dbh.classes.php";

class Posts extends Dbh
{
    private $pdo;

    // Constructor receives an existing PDO instance
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getUserById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM outreaches WHERE outreach_id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
}
// Establish a database connection
$pdo = new PDO("mysql:host=localhost;dbname=jasons", 'root', '');

// Create an instance of the post class
$viewPost = new Posts($pdo);

// Get the post ID from the URL parameter
$post_id = $_GET['id'];

// Retrieve post details by ID
$post = $viewPost->getUserById($post_id);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apply For Outreach | Jasons</title>
    <link rel="stylesheet" type="text/css" href="css/add_out.css">
</head>
<body>
<!-- Stephonce R. MOrris | 2014 -->

<!-- Google Font -->
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>

         <?php
        if (isset($_GET['status'])) {
            $errorCode = htmlspecialchars($_GET['status']); // Sanitize input
            switch ($errorCode) {
                case 'stmtfailed':
                    echo '<p style="color: white; text-align: center;">An unexpected error occurred!</p>';
                    break;
                case 'allfieldrequired':
                    echo '<p style="color: white; text-align: center;">All fields are required!</p>';
                    break;
                case 'applysuccess':
                    echo '<p style="color: white; text-align: center;">Succesfull</p>';
                    break;         
                default:
                    // Log unrecognized error codes for debugging
                    error_log("Unrecognized error code: $errorCode");
                    echo '<p style="color: white; text-align: center;">An unexpected error occurred! Please try again later.</p>';
                    break;
            }
        } else {
            echo '<p style="color: white; text-align: center;">Kindly fill in your details correctly!</p>';
        }
        ?>
<form action="includes/apply_outreach.inc.php" method="post" enctype="multipart/form-data">

<!-- Form Title -->
        <h1>Apply For Outreach</h1>

        <fieldset>

            <legend><span class="number">1</span><abbr title="Information">Your Basic Info</abbr></legend>
<!-- Name Input -->
            <label for="name">Full Name:<i style="color:red;">*</i></label>
            <input type="text" value="<?php echo $_SESSION['first_name'] ?> <?php echo $_SESSION['last_name'] ?>" id="name" name="name">
<!-- E-mail Input -->
            <label for="about">E-mail:<i style="color:red;">*</i></label>
            <input type="text" id="mail" value="<?php echo $_SESSION['email']?>" name="email">
 <!-- Ocupation Input -->
            <label for="about">Occupation:<i style="color:red;">*</i></label>
            <input type="text" id="mail" value="<?php echo $_SESSION['job_pro']?>" name="occupation">
<!-- Age Dropdown -->
            <label for="age">Country:</label>
            
            <select name="country" id="">
<option>Select Country</option>
                                      <option>Afghanistan</option>
                                      <option>Åland Islands</option>
                                      <option>Albania</option>
                                      <option>Algeria</option>
                                      <option>American Samoa</option>
                                      <option>Andorra</option>
                                      <option>Angola</option>
                                      <option>Anguilla</option>
                                      <option>Antarctica</option>
                                      <option>Antigua and Barbuda</option>
                                      <option>Argentina</option>
                                      <option>Armenia</option>
                                      <option>Aruba</option>
                                      <option>Australia</option>
                                      <option>Austria</option>
                                      <option>Azerbaijan</option>
                                      <option>Bahamas</option>
                                      <option>Bahrain</option>
                                      <option>Bangladesh</option>
                                      <option>Barbados</option>
                                      <option>Belarus</option>
                                      <option>Belgium</option>
                                      <option>Belize</option>
                                      <option>Benin</option>
                                      <option>Bermuda</option>
                                      <option>Bhutan</option>
                                      <option>Bolivia (Plurinational State of)</option>
                                      <option>Bonaire, Sint Eustatius and Saba</option>
                                      <option>Bosnia and Herzegovina</option>
                                      <option>Botswana</option>
                                      <option>Bouvet Island</option>
                                      <option>Brazil</option>
                                      <option>British Indian Ocean Territory</option>
                                      <option>Brunei Darussalam</option>
                                      <option>Bulgaria</option>
                                      <option>Burkina Faso</option>
                                      <option>Burundi</option>
                                      <option>Cabo Verde</option>
                                      <option>Cambodia</option>
                                      <option>Cameroon</option>
                                      <option>Canada</option>
                                      <option>Cayman Islands</option>
                                      <option>Central African Republic</option>
                                      <option>Chad</option>
                                      <option>Chile</option>
                                      <option>China</option>
                                      <option>Christmas Island</option>
                                      <option>Cocos (Keeling) Islands</option>
                                      <option>Colombia</option>
                                      <option>Comoros</option>
                                      <option>Congo</option>
                                      <option>Congo (Democratic Republic of the)</option>
                                      <option>Cook Islands</option>
                                      <option>Costa Rica</option>
                                      <option>Croatia</option>
                                      <option>Cuba</option>
                                      <option>Curaçao</option>
                                      <option>Cyprus</option>
                                      <option>Czech Republic</option>
                                      <option>Denmark</option>
                                      <option>Djibouti</option>
                                      <option>Dominica</option>
                                      <option>Dominican Republic</option>
                                      <option>Ecuador</option>
                                      <option>Egypt</option>
                                      <option>El Salvador</option>
                                      <option>Equatorial Guinea</option>
                                      <option>Eritrea</option>
                                      <option>Estonia</option>
                                      <option>Ethiopia</option>
                                      <option>Falkland Islands (Malvinas)</option>
                                      <option>Faroe Islands</option>
                                      <option>Fiji</option>
                                      <option>Finland</option>
                                      <option>France</option>
                                      <option>French Guiana</option>
                                      <option>French Polynesia</option>
                                      <option>French Southern Territories</option>
                                      <option>Gabon</option>
                                      <option>Gambia</option>
                                      <option>Georgia</option>
                                      <option>Germany</option>
                                      <option>Ghana</option>
                                      <option>Gibraltar</option>
                                      <option>Greece</option>
                                      <option>Greenland</option>
                                      <option>Grenada</option>
                                      <option>Guadeloupe</option>
                                      <option>Guam</option>
                                      <option>Guatemala</option>
                                      <option>Guernsey</option>
                                      <option>Guinea</option>
                                      <option>Guinea-Bissau</option>
                                      <option>Guyana</option>
                                      <option>Haiti</option>
                                      <option>Heard Island and McDonald Islands</option>
                                      <option>Holy See</option>
                                      <option>Honduras</option>
                                      <option>Hong Kong</option>
                                      <option>Hungary</option>
                                      <option>Iceland</option>
                                      <option>India</option>
                                      <option>Indonesia</option>
                                      <option>Iran (Islamic Republic of)</option>
                                      <option>Iraq</option>
                                      <option>Ireland</option>
                                      <option>Isle of Man</option>
                                      <option>Israel</option>
                                      <option>Italy</option>
                                      <option>Jamaica</option>
                                      <option>Japan</option>
                                      <option>Jersey</option>
                                      <option>Jordan</option>
                                      <option>Kazakhstan</option>
                                      <option>Kenya</option>
                                      <option>Kiribati</option>
                                      <option>Korea (Democratic People's Republic of)</option>
                                      <option>Korea (Republic of)</option>
                                      <option>Kuwait</option>
                                      <option>Kyrgyzstan</option>
                                      <option>Lao People's Democratic Republic</option>
                                      <option>Latvia</option>
                                      <option>Lebanon</option>
                                      <option>Lesotho</option>
                                      <option>Liberia</option>
                                      <option>Libya</option>
                                      <option>Liechtenstein</option>
                                      <option>Lithuania</option>
                                      <option>Luxembourg</option>
                                      <option>Macao</option>
                                      <option>Macedonia (the former Yugoslav Republic of)</option>
                                      <option>Madagascar</option>
                                      <option>Malawi</option>
                                      <option>Malaysia</option>
                                      <option>Maldives</option>
                                      <option>Mali</option>
                                      <option>Malta</option>
                                      <option>Marshall Islands</option>
                                      <option>Martinique</option>
                                      <option>Mauritania</option>
                                      <option>Mauritius</option>
                                      <option>Mayotte</option>
                                      <option>Mexico</option>
                                      <option>Micronesia (Federated States of)</option>
                                      <option>Moldova (Republic of)</option>
                                      <option>Monaco</option>
                                      <option>Mongolia</option>
                                      <option>Montenegro</option>
                                      <option>Montserrat</option>
                                      <option>Morocco</option>
                                      <option>Mozambique</option>
                                      <option>Myanmar</option>
                                      <option>Namibia</option>
                                      <option>Nauru</option>
                                      <option>Nepal</option>
                                      <option>Netherlands</option>
                                      <option>New Caledonia</option>
                                      <option>New Zealand</option>
                                      <option>Nicaragua</option>
                                      <option>Niger</option>
                                      <option>Nigeria</option>
                                      <option>Niue</option>
                                      <option>Norfolk Island</option>
                                      <option>Northern Mariana Islands</option>
                                      <option>Norway</option>
                                      <option>Oman</option>
                                      <option>Pakistan</option>
                                      <option>Palau</option>
                                      <option>Palestine, State of</option>
                                      <option>Panama</option>
                                      <option>Papua New Guinea</option>
                                      <option>Paraguay</option>
                                      <option>Peru</option>
                                      <option>Philippines</option>
                                      <option>Pitcairn</option>
                                      <option>Poland</option>
                                      <option>Portugal</option>
                                      <option>Puerto Rico</option>
                                      <option>Qatar</option>
                                      <option>Réunion</option>
                                      <option>Romania</option>
                                      <option>Russian Federation</option>
                                      <option>Rwanda</option>
                                      <option>Saint Barthélemy</option>
                                      <option>Saint Helena, Ascension and Tristan da Cunha</option>
                                      <option>Saint Kitts and Nevis</option>
                                      <option>Saint Lucia</option>
                                      <option>Saint Martin (French part)</option>
                                      <option>Saint Pierre and Miquelon</option>
                                      <option>Saint Vincent and the Grenadines</option>
                                      <option>Samoa</option>
                                      <option>San Marino</option>
                                      <option>Sao Tome and Principe</option>
                                      <option>Saudi Arabia</option>
                                      <option>Senegal</option>
                                      <option>Serbia</option>
                                      <option>Seychelles</option>
                                      <option>Sierra Leone</option>
                                      <option>Singapore</option>
                                      <option>Sint Maarten (Dutch part)</option>
                                      <option>Slovakia</option>
                                      <option>Slovenia</option>
                                      <option>Solomon Islands</option>
                                      <option>Somalia</option>
                                      <option>South Africa</option>
                                      <option>South Georgia and the South Sandwich Islands</option>
                                      <option>South Sudan</option>
                                      <option>Spain</option>
                                      <option>Sri Lanka</option>
                                      <option>Sudan</option>
                                      <option>Suriname</option>
                                      <option>Svalbard and Jan Mayen</option>
                                      <option>Swaziland</option>
                                      <option>Sweden</option>
                                      <option>Switzerland</option>
                                      <option>Syrian Arab Republic</option>
                                      <option>Taiwan, Province of China</option>
                                      <option>Tajikistan</option>
                                      <option>Tanzania, United Republic of</option>
                                      <option>Thailand</option>
                                      <option>Timor-Leste</option>
                                      <option>Togo</option>
                                      <option>Tokelau</option>
                                      <option>Tonga</option>
                                      <option>Trinidad and Tobago</option>
                                      <option>Tunisia</option>
                                      <option>Turkey</option>
                                      <option>Turkmenistan</option>
                                      <option>Turks and Caicos Islands</option>
                                      <option>Tuvalu</option>
                                      <option>Uganda</option>
                                      <option>Ukraine</option>
                                      <option>United Arab Emirates</option>
                                      <option>United Kingdom of Great Britain and Northern Ireland</option>
                                      <option>United States of America</option>
                                      <option>United States Minor Outlying Islands</option>
                                      <option>Uruguay</option>
                                      <option>Uzbekistan</option>
                                      <option>Vanuatu</option>
                                      <option>Venezuela (Bolivarian Republic of)</option>
                                      <option>Viet Nam</option>
                                      <option>Virgin Islands (British)</option>
                                      <option>Virgin Islands (U.S.)</option>
                                      <option>Wallis and Futuna</option>
                                      <option>Western Sahara</option>
                                      <option>Yemen</option>
                                      <option>Zambia</option>
                                      <option>Zimbabwe</option>
            </select>

        </fieldset>
        <fieldset>
            <legend>Outreach</legend>
            <label>Outrech Title:</label>
            <input type="text" value="<?php echo $post['title']; ?>" name="title">
             <input type="hidden" value="<?php echo $post['outreach_id']; ?>" name="outreache_id">
        </fieldset>

        <fieldset>

            <legend><span class="number">2</span>We would love to know why you want to attend this outreach</legend>
<!-- Bio Input -->
            <label for="location">Body(Content):<i style="color:red;">*</i></label>
            <textarea rows="10" name="body" id="bio"></textarea>
        </fieldset>

        <button type="submit">Apply</button>

        </form>
    </body>
</html>