<?php
  // Create database connection
session_start();

require('../config.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$id = $_SESSION['id'];

$queryfunds = "SELECT * FROM user WHERE id = '$id' ";

 $resultfunds = mysqli_query($conn, $queryfunds) or die(mysql_error());
 
 $row = $rowfunds = mysqli_fetch_assoc($resultfunds);
 
 
 $query = "SELECT * FROM funds WHERE userid = '$id' AND status = 'accepted'";

 $result = mysqli_query($conn, $query) or die(mysql_error());
 
?>

<!DOCTYPE html>
<html lang="en">
 <head>
     
     <meta http-equiv="refresh" content="1800;url=logout.php" />
      <meta charset="utf-8" />
      <title>Trade Fare - Welcome <?php echo $_SESSION['uname']?>.</title>
          <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <!-- Favicon -->
      <link rel="shortcut icon" href="../images/favicon.png">
      <!-- Template CSS Files -->
      <link rel="stylesheet" href="../css/font-awesome.min.css">
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/magnific-popup.css">
      <link rel="stylesheet" href="../css/select2.min.css">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/skins/orange.css">
      <!-- Live Style Switcher - demo only -->
      <link rel="alternate stylesheet" type="text/css" title="orange" href="../css/skins/orange.css" />
      <link rel="alternate stylesheet" type="text/css" title="green" href="../css/skins/green.css" />
      <link rel="alternate stylesheet" type="text/css" title="blue" href="../css/skins/blue.css" />
      <link rel="stylesheet" type="text/css" href="../css/styleswitcher.css" />
      <!--  W3 Schools CDNs  -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <!-- Template JS Files -->
      <script src="../js/modernizr.js"></script>
   </head>
   <body>
      <!-- SVG Preloader Starts -->
      <!--<div id="preloader">-->
      <!--   <div id="preloader-content">-->
      <!--      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="150px" viewBox="100 100 400 400" xml:space="preserve">-->
      <!--         <filter id="dropshadow" height="130%">-->
      <!--            <feGaussianBlur in="SourceAlpha" stdDeviation="5"/>-->
      <!--            <feOffset dx="0" dy="0" result="offsetblur"/>-->
      <!--            <feFlood flood-color="red"/>-->
      <!--            <feComposite in2="offsetblur" operator="in"/>-->
      <!--            <feMerge>-->
      <!--               <feMergeNode/>-->
      <!--               <feMergeNode in="SourceGraphic"/>-->
      <!--            </feMerge>-->
      <!--         </filter>-->
      <!--         <path class="path" fill="#000000" d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068-->
      <!--            c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073-->
      <!--            l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23-->
      <!--            c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188-->
      <!--            c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995-->
      <!--            l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984-->
      <!--            C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404-->
      <!--            C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489-->
      <!--            C327.767,212.14,389.234,221.02,379.302,260.846z"/>-->
      <!--      </svg>-->
      <!--   </div>-->
      <!--</div>-->
      <!-- Wrapper Starts -->
      <div class="wrapper">
         <!-- Header Starts -->
         <header class="header">
               <div class="container">
                  <div class="row">
                     <!-- Logo Starts -->
                       <div class="main-logo col-xs-12 col-md-3 col-md-2 col-lg-2 hidden-xs">
                                <a href="index.php" >
                                    <img id="logo" class="img-responsive logo-img" src="../images/new-logo.png" alt=" TRADE FARE logo">
                                    <p class="logo-text">TRADE FARE</p>
                                </a>
                            </div>
                     <!-- Logo Ends -->
                     <!-- Statistics Starts -->
                     <div class="col-md-7 col-lg-7">
                        <ul class="unstyled bitcoin-stats text-center">
                           <li>
                              <h6>9,450 USD</h6>
                              <span>Last trade price</span>
                           </li>
                           <li>
                              <h6>+5.26%</h6>
                              <span>24 hour price</span>
                           </li>
                           <li>
                              <h6>12.820 BTC</h6>
                              <span>24 hour volume</span>
                           </li>
                           <li>
                              <h6>2,231,775</h6>
                              <span>active traders</span>
                           </li>
                           <li>
                              <div class="btcwdgt-price" data-bw-theme="light" data-bw-cur="usd"></div>
                              <span>Live Bitcoin price</span>
                           </li>
                        </ul>
                     </div>
                     <!-- Statistics Ends -->
                     <!-- User Sign In/Sign Up Starts -->
                     <div class="col-md-3 col-lg-3" style="margin:3px 0; padding:2px 0">
                        <ul class="unstyled user">
                           <li class="sign-in"><a href="logout.php" class="btn btn-primary"><i class=""></i> sign Out</a></li>
                           <li class="sign-up"><a href="user-profile.php" class="btn btn-primary"><i class="fa fa-user-plus"></i> Profile</a></li>
                        </ul>
                     </div>
                     <!-- User Sign In/Sign Up Ends -->
                  </div>
               </div>
               <!-- Navigation Menu Starts -->
               <nav class="site-navigation navigation" id="site-navigation">
                  <div class="container">
                     <div class="site-nav-inner">
                        <!-- Logo For ONLY Mobile display Starts -->
                        <a class="logo-mobile" href="../index.php">
                           <img id="logo" class="img-responsive logo-mobile-padding" src="../images/new-logo.png" alt=" TRADE FARE mobile logo"><span class="logo-text">TRADE FARE</span>
                        </a>
                        <!-- Logo For ONLY Mobile display Ends -->
                        <!-- Toggle Icon for Mobile Starts -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <!-- Toggle Icon for Mobile Ends -->
                        <div class="collapse navbar-collapse navbar-responsive-collapse">
                           <!-- Main Menu Starts -->
                           <ul class="nav navbar-nav">
                              <li class="active"><a href="dashboard-home.php">Dashboard</a></li>
                              <li><a href="fund-account.php">Fund Account</a></li>
                              <li><a href="withdraw-funds.php">Withdraw Funds</a></li>
                           </ul>
                           <!-- Main Menu Ends -->
                        </div>
                     </div>
                  </div>
                  <!-- Search Input Starts -->
                  <div class="site-search">
                     <div class="container">
                        <input type="text" placeholder="type your keyword and hit enter ...">
                        <span class="close">×</span>
                     </div>
                  </div>
                  <!-- Search Input Ends -->
               </nav>
               <!-- Navigation Menu Ends -->
            </header>
         <!-- Header Ends -->
         <!-- Banner Area Starts -->
         <section class="banner-area">
            <div class="banner-overlay">
               <div class="banner-text text-center">
                  <div class="container">
                     <!-- Section Title Starts -->
                     <div class="row text-center">
                        <div class="col-xs-12">
                           <!-- Title Starts -->
                           <!-- <h2 class="title-head">Welcome <span>{{ User }}</span></h2> -->
                           <!-- Title Ends -->
                           <hr>
                           <!-- Breadcrumb Starts -->
                           <ul class="breadcrumb">
                              <li><a href="index.html"> Dashboard</a></li>
                              <li>User Profile</li>
                           </ul>
                           <!-- Breadcrumb Ends -->
                        </div>
                     </div>
                     <!-- Section Title Ends -->
                  </div>
               </div>
            </div>
         </section>
         <!-- Banner Area Ends -->
         <!-- Section Services Starts -->
         <section class="services container">
            <div class="row">
              <!-- Top rows Start -->
              <div class="col-md-12" style="padding-bottom:40px">
                  <?php include 'investment.php' ?>
                  </div>
                <!-- Top rows End -->

                <div class="container" style="margin: 0 1em 0 1em;">
                  <!-- Service Box Starts -->
                  <div class="col-md-3 service-box pb-2 modal-margin" style="border-top: 2px solid #fd961a;">
                     <div class="row">
                       <div>
                          <!-- <img id="payment-options" src="../images/icons/orange/payment-options.png" alt="payment options"/> -->
                          <i class="fa fa-users fa-2x primary-color"></i>
                          <div class="service-box-content">
                             <h3>User Profile</h3>
                          </div>
                       </div>
                    </div>
                  </div>
                  <!-- Service Box Ends -->

                  <!-- Service Box Starts -->
                  <div class="col-md-12 text-center fund-wallet-form" style="border-top: 2px solid #fd961a;">
                      <div>
                         <!-- <img id="crypto-investment" src="../images/icons/orange/cost-efficiency.png" alt="invest crypto"> -->
                         <div class="service-box-content text-left">
                            <!-- Profile Edit header starts -->
                            <div class="col-md-12" style="margin: -2em 0 1.5em 0;">
                              <div class="col-md-6">
                                <h3 class="" style="color: #fff; margin-left: 1em;">About Me</h3>
                                <p class="info-form" style="margin-left: 1em;">Referral Link: 
                                  <span class="text-success">
                                    https://tradeFare.com/register.php?ref=<?php echo $row['id'] ?>
                                  </span>
                                  <button class="btn primary-color ref-btn">copy</button>
                                </p>
                              </div>
                              <!--<div class="col-md-6">-->
                              <!--  <p class="text-right">-->
                              <!--    <button class="btn ref-btn" data-toggle="modal" data-target="#profileEditModal"><i class="fa fa-edit"></i></button>-->
                              <!--  </p>-->
                              <!--</div>-->
                            </div>
                            <!-- Profile Edit header ends -->
                            <div class="container"  style="margin: 2em 0 2em 0;">
                               <div>
                                  <!-- Section Profile row Starts -->
                                  <div class="row col-md-12">
                                    <div class="col-md-6">
                                      <table class="table">
                                         <tbody>
                                            <tr>
                                               <th scope="row">Full Name</th>
                                               <td><?php echo $row['fname'] ?></td>
                                            </tr>
                                            <tr>
                                               <th scope="row">Email</th>
                                               <td><?php echo $row['email'] ?></td>
                                            </tr>
                                            <!--<tr>-->
                                            <!--   <th scope="row">Trade Currency</th>-->
                                            <!--   <td>$</td>-->
                                            <!--</tr>-->
                                            <tr>
                                               <th scope="row">Account Status</th>
                                               <td><span class ='label label-success'>Verified</span></td>
                                            </tr>
                                            <tr>
                                               <th scope="row">Balance</th>
                                               <td><?php                                       while($rowfunds = mysqli_fetch_assoc($result)) {
 echo '<p>'.ucfirst($rowfunds['plan']).' | '.ucfirst($rowfunds['investoption']).' | '.$rowfunds['profit'].'</p>';
 }
 ?></td>
                                            </tr>
                                         </tbody>
                                      </table>
                                    </div>
                                    <!-- Section Profile row Ends -->

                                    <!-- Section Profile row Starts -->
                                      <div class="col-md-6">
                                        <table class="table m-0">
                                           <tbody>
                                              <tr>
                                                 <th scope="row">Country</th>
                                                 <td><?php echo $row['country'] ?></td>
                                              </tr>
                                              <tr>
                                                 <th scope="row">Mobile Number</th>
                                                 <td><?php echo $row['phone'] ?> </td>
                                              </tr>
                                           
                                           </tbody>
                                        </table>
                                      </div>
                                    <!-- Section Profile row Ends -->
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                  </div> 
                  <!-- Service Box Ends -->
                </div>
              </div> 
            </div>
            <!-- Modal -->
            <div class="modal fade modal-margin" id="profileEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h3 class="modal-title primary-color" id="exampleModalLabel">EDIT YOUR PROFILE.</h3>
                     </div>
                     <div class="modal-body">
                        <form action ="edit.php" method="post">
                           <div class="form-group">
                              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="deposit-address" value="<?php echo $row['email'] ?>" required>
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="deposit-address" value="<?php echo $row['phone'] ?>" required>
                           </div>
                           <div class="form-group">
                              <select name="country" required class="form-control input-border" />
                               <option value="">Select Country</option>
                               <option value="United States">United States</option>
                               <option value="United Kingdom">United Kingdom</option>
                               <option value="Afghanistan">Afghanistan</option>
                               <option value="Albania">Albania</option>
                               <option value="Algeria">Algeria</option>
                               <option value="American Samoa">American Samoa</option>
                               <option value="Andorra">Andorra</option>
                               <option value="Angola">Angola</option>
                               <option value="Anguilla">Anguilla</option>
                               <option value="Antarctica">Antarctica</option>
                               <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                               <option value="Argentina">Argentina</option>
                               <option value="Armenia">Armenia</option>
                               <option value="Aruba">Aruba</option>
                               <option value="Australia">Australia</option>
                               <option value="Austria">Austria</option>
                               <option value="Azerbaijan">Azerbaijan</option>
                               <option value="Bahamas">Bahamas</option>
                               <option value="Bahrain">Bahrain</option>
                               <option value="Bangladesh">Bangladesh</option>
                               <option value="Barbados">Barbados</option>
                               <option value="Belarus">Belarus</option>
                               <option value="Belgium">Belgium</option>
                               <option value="Belize">Belize</option>
                               <option value="Benin">Benin</option>
                               <option value="Bermuda">Bermuda</option>
                               <option value="Bhutan">Bhutan</option>
                               <option value="Bolivia">Bolivia</option>
                               <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                               <option value="Botswana">Botswana</option>
                               <option value="Bouvet Island">Bouvet Island</option>
                               <option value="Brazil">Brazil</option>
                               <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                               <option value="Brunei Darussalam">Brunei Darussalam</option>
                               <option value="Bulgaria">Bulgaria</option>
                               <option value="Burkina Faso">Burkina Faso</option>
                               <option value="Burundi">Burundi</option>
                               <option value="Cambodia">Cambodia</option>
                               <option value="Cameroon">Cameroon</option>
                               <option value="Canada">Canada</option>
                               <option value="Cape Verde">Cape Verde</option>
                               <option value="Cayman Islands">Cayman Islands</option>
                               <option value="Central African Republic">Central African Republic</option>
                               <option value="Chad">Chad</option>
                               <option value="Chile">Chile</option>
                               <option value="China">China</option>
                               <option value="Christmas Island">Christmas Island</option>
                               <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                               <option value="Colombia">Colombia</option>
                               <option value="Comoros">Comoros</option>
                               <option value="Congo">Congo</option>
                               <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                               <option value="Cook Islands">Cook Islands</option>
                               <option value="Costa Rica">Costa Rica</option>
                               <option value="Cote D'ivoire">Cote D'ivoire</option>
                               <option value="Croatia">Croatia</option>
                               <option value="Cuba">Cuba</option>
                               <option value="Cyprus">Cyprus</option>
                               <option value="Czech Republic">Czech Republic</option>
                               <option value="Denmark">Denmark</option>
                               <option value="Djibouti">Djibouti</option>
                               <option value="Dominica">Dominica</option>
                               <option value="Dominican Republic">Dominican Republic</option>
                               <option value="Ecuador">Ecuador</option>
                               <option value="Egypt">Egypt</option>
                               <option value="El Salvador">El Salvador</option>
                               <option value="Equatorial Guinea">Equatorial Guinea</option>
                               <option value="Eritrea">Eritrea</option>
                               <option value="Estonia">Estonia</option>
                               <option value="Ethiopia">Ethiopia</option>
                               <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                               <option value="Faroe Islands">Faroe Islands</option>
                               <option value="Fiji">Fiji</option>
                               <option value="Finland">Finland</option>
                               <option value="France">France</option>
                               <option value="French Guiana">French Guiana</option>
                               <option value="French Polynesia">French Polynesia</option>
                               <option value="French Southern Territories">French Southern Territories</option>
                               <option value="Gabon">Gabon</option>
                               <option value="Gambia">Gambia</option>
                               <option value="Georgia">Georgia</option>
                               <option value="Germany">Germany</option>
                               <option value="Ghana">Ghana</option>
                               <option value="Gibraltar">Gibraltar</option>
                               <option value="Greece">Greece</option>
                               <option value="Greenland">Greenland</option>
                               <option value="Grenada">Grenada</option>
                               <option value="Guadeloupe">Guadeloupe</option>
                               <option value="Guam">Guam</option>
                               <option value="Guatemala">Guatemala</option>
                               <option value="Guinea">Guinea</option>
                               <option value="Guinea-bissau">Guinea-bissau</option>
                               <option value="Guyana">Guyana</option>
                               <option value="Haiti">Haiti</option>
                               <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                               <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                               <option value="Honduras">Honduras</option>
                               <option value="Hong Kong">Hong Kong</option>
                               <option value="Hungary">Hungary</option>
                               <option value="Iceland">Iceland</option>
                               <option value="India">India</option>
                               <option value="Indonesia">Indonesia</option>
                               <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                               <option value="Iraq">Iraq</option>
                               <option value="Ireland">Ireland</option>
                               <option value="Israel">Israel</option>
                               <option value="Italy">Italy</option>
                               <option value="Jamaica">Jamaica</option>
                               <option value="Japan">Japan</option>
                               <option value="Jordan">Jordan</option>
                               <option value="Kazakhstan">Kazakhstan</option>
                               <option value="Kenya">Kenya</option>
                               <option value="Kiribati">Kiribati</option>
                               <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                               <option value="Korea, Republic of">Korea, Republic of</option>
                               <option value="Kuwait">Kuwait</option>
                               <option value="Kyrgyzstan">Kyrgyzstan</option>
                               <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                               <option value="Latvia">Latvia</option>
                               <option value="Lebanon">Lebanon</option>
                               <option value="Lesotho">Lesotho</option>
                               <option value="Liberia">Liberia</option>
                               <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                               <option value="Liechtenstein">Liechtenstein</option>
                               <option value="Lithuania">Lithuania</option>
                               <option value="Luxembourg">Luxembourg</option>
                               <option value="Macao">Macao</option>
                               <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                               <option value="Madagascar">Madagascar</option>
                               <option value="Malawi">Malawi</option>
                               <option value="Malaysia">Malaysia</option>
                               <option value="Maldives">Maldives</option>
                               <option value="Mali">Mali</option>
                               <option value="Malta">Malta</option>
                               <option value="Marshall Islands">Marshall Islands</option>
                               <option value="Martinique">Martinique</option>
                               <option value="Mauritania">Mauritania</option>
                               <option value="Mauritius">Mauritius</option>
                               <option value="Mayotte">Mayotte</option>
                               <option value="Mexico">Mexico</option>
                               <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                               <option value="Moldova, Republic of">Moldova, Republic of</option>
                               <option value="Monaco">Monaco</option>
                               <option value="Mongolia">Mongolia</option>
                               <option value="Montserrat">Montserrat</option>
                               <option value="Morocco">Morocco</option>
                               <option value="Mozambique">Mozambique</option>
                               <option value="Myanmar">Myanmar</option>
                               <option value="Namibia">Namibia</option>
                               <option value="Nauru">Nauru</option>
                               <option value="Nepal">Nepal</option>
                               <option value="Netherlands">Netherlands</option>
                               <option value="Netherlands Antilles">Netherlands Antilles</option>
                               <option value="New Caledonia">New Caledonia</option>
                               <option value="New Zealand">New Zealand</option>
                               <option value="Nicaragua">Nicaragua</option>
                               <option value="Niger">Niger</option>
                               <option value="Nigeria">Nigeria</option>
                               <option value="Niue">Niue</option>
                               <option value="Norfolk Island">Norfolk Island</option>
                               <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                               <option value="Norway">Norway</option>
                               <option value="Oman">Oman</option>
                               <option value="Pakistan">Pakistan</option>
                               <option value="Palau">Palau</option>
                               <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                               <option value="Panama">Panama</option>
                               <option value="Papua New Guinea">Papua New Guinea</option>
                               <option value="Paraguay">Paraguay</option>
                               <option value="Peru">Peru</option>
                               <option value="Philippines">Philippines</option>
                               <option value="Pitcairn">Pitcairn</option>
                               <option value="Poland">Poland</option>
                               <option value="Portugal">Portugal</option>
                               <option value="Puerto Rico">Puerto Rico</option>
                               <option value="Qatar">Qatar</option>
                               <option value="Reunion">Reunion</option>
                               <option value="Romania">Romania</option>
                               <option value="Russian Federation">Russian Federation</option>
                               <option value="Rwanda">Rwanda</option>
                               <option value="Saint Helena">Saint Helena</option>
                               <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                               <option value="Saint Lucia">Saint Lucia</option>
                               <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                               <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                               <option value="Samoa">Samoa</option>
                               <option value="San Marino">San Marino</option>
                               <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                               <option value="Saudi Arabia">Saudi Arabia</option>
                               <option value="Senegal">Senegal</option>
                               <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                               <option value="Seychelles">Seychelles</option>
                               <option value="Sierra Leone">Sierra Leone</option>
                               <option value="Singapore">Singapore</option>
                               <option value="Slovakia">Slovakia</option>
                               <option value="Slovenia">Slovenia</option>
                               <option value="Solomon Islands">Solomon Islands</option>
                               <option value="Somalia">Somalia</option>
                               <option value="South Africa">South Africa</option>
                               <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                               <option value="Spain">Spain</option>
                               <option value="Sri Lanka">Sri Lanka</option>
                               <option value="Sudan">Sudan</option>
                               <option value="Suriname">Suriname</option>
                               <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                               <option value="Swaziland">Swaziland</option>
                               <option value="Sweden">Sweden</option>
                               <option value="Switzerland">Switzerland</option>
                               <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                               <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                               <option value="Tajikistan">Tajikistan</option>
                               <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                               <option value="Thailand">Thailand</option>
                               <option value="Timor-leste">Timor-leste</option>
                               <option value="Togo">Togo</option>
                               <option value="Tokelau">Tokelau</option>
                               <option value="Tonga">Tonga</option>
                               <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                               <option value="Tunisia">Tunisia</option>
                               <option value="Turkey">Turkey</option>
                               <option value="Turkmenistan">Turkmenistan</option>
                               <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                               <option value="Tuvalu">Tuvalu</option>
                               <option value="Uganda">Uganda</option>
                               <option value="Ukraine">Ukraine</option>
                               <option value="United Arab Emirates">United Arab Emirates</option>
                               <option value="United Kingdom">United Kingdom</option>
                               <option value="United States">United States</option>
                               <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                               <option value="Uruguay">Uruguay</option>
                               <option value="Uzbekistan">Uzbekistan</option>
                               <option value="Vanuatu">Vanuatu</option>
                               <option value="Venezuela">Venezuela</option>
                               <option value="Viet Nam">Viet Nam</option>
                               <option value="Virgin Islands, British">Virgin Islands, British</option>
                               <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                               <option value="Wallis and Futuna">Wallis and Futuna</option>
                               <option value="Western Sahara">Western Sahara</option>
                               <option value="Yemen">Yemen</option>
                               <option value="Zambia">Zambia</option>
                               <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                           </div>
                           <div class="form-group">
                             <select name="currency" required class="form-control input-border">
                               <option value="$">$ USD</option>
                               <option value="&euro;">&euro; EUR</option>
                               <option value="&pound;">&pound; GBP</option>
                               <option value="BTC">&#3647; Bitcoin</option>
                             </select>
                           </div>
                           <p class="text-center">
                              <button class="btn btn-primary " type="button">Save</button>
                           </p>
                        </form>
                        <h4 class="primary-color notice-text text-center">Note! <br> Only pass your correct information to avoid unforseen complications </h4>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Modal Ends -->
         </section>
         <!-- Section Services Ends -->
         <!-- Footer Starts -->
         <footer class="footer">
            <!-- Footer Top Area Starts -->
            <div class="top-footer">
               <div class="container">
                  <div class="row">
                     <!-- Footer Widget Starts -->
                     <div class="col-md-5">
                        <div class="footer-meter-block">
                           <!-- TradingView Widget BEGIN -->
                           <div class="tradingview-widget-container">
                              <div class="tradingview-widget-container__widget"></div>
                              <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/GBPUSD/?exchange=FX" rel="noopener" target="_blank"><span class="blue-text">GBPUSD Rates</span></a> by Trade Fare</div>
                              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                 {
                                 "symbol": "FX:GBPUSD",
                                 "width": "100%",
                                 "height": "100%",
                                 "locale": "en",
                                 "dateRange": "12M",
                                 "colorTheme": "dark",
                                 "trendLineColor": "rgba(230, 145, 56, 1)",
                                 "underLineColor": "rgba(0, 0, 0, 0.15)",
                                 "isTransparent": true,
                                 "autosize": true,
                                 "largeChartUrl": ""
                                 }
                              </script>
                           </div>
                           <!-- TradingView Widget END -->
                        </div>
                     </div>
                     <!-- Footer Widget Ends -->
                     <!-- Footer Widget Starts -->
                     <div class="col-sm-12 col-md-5">
                        <!-- Facts Starts -->
                        <div class="facts-footer">
                           <div>
                              <h5>$198.76B</h5>
                              <span>Market cap</span>
                           </div>
                           <div>
                              <h5>243K</h5>
                              <span>daily transactions</span>
                           </div>
                           <div>
                              <h5>369K</h5>
                              <span>active accounts</span>
                           </div>
                           <div>
                              <h5>127</h5>
                              <span>supported countries</span>
                           </div>
                        </div>
                        <!-- Facts Ends -->
                        <hr>
                     </div>
                     <!-- Footer Widget Ends -->
                  </div>
               </div>
            </div>
            <!-- Footer Top Area Ends -->
            <!-- Footer Bottom Area Starts -->
            <div class="bottom-footer">
               <div class="container">
                  <div class="row">
                     <div class="col-xs-12">
                        <!-- Copyright Text Starts -->
                        <p class="text-center"><a href="../index.html" target="_blank">Trade Fare.</a></p>
                        <!-- Copyright Text Ends -->
                     </div>
                  </div>
               </div>
            </div>
            <!-- Footer Bottom Area Ends -->
         </footer>
         <!-- Footer Ends -->
         <!-- Back To Top Starts  -->
         <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up"></a>
         <!-- Back To Top Ends  -->
         <!-- Template JS Files -->
         <script src="../js/jquery-2.2.4.min.js"></script>
         <script src="../js/bootstrap.min.js"></script>
         <script src="../js/select2.min.js"></script>
         <script src="../js/jquery.magnific-popup.min.js"></script>
         <script src="../js/custom.js"></script>
         <!-- Live Style Switcher JS File - only demo -->
         <script src="../js/styleswitcher.js"></script>
      </div>
      <!-- Wrapper Ends -->
   </body>
</html>